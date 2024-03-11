<?php
namespace Aws\Glacier;

use Aws\Api\ApiProvider;
use Aws\Api\DocModel;
use Aws\Api\Service;
use Aws\AwsClient;
use Aws\CommandInterface;
use Aws\Exception\CouldNotCreateChecksumException;
use Aws\HashingStream;
use Aws\Middleware;
use Aws\PhpHash;
use Aws\Result;
use GuzzleHttp\Promise\Promise;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Amazon Glacier** service.
 *
 * @method Result abortMultipartUpload(array $args = [])
 * @method Promise abortMultipartUploadAsync(array $args = [])
 * @method Result abortVaultLock(array $args = [])
 * @method Promise abortVaultLockAsync(array $args = [])
 * @method Result addTagsToVault(array $args = [])
 * @method Promise addTagsToVaultAsync(array $args = [])
 * @method Result completeMultipartUpload(array $args = [])
 * @method Promise completeMultipartUploadAsync(array $args = [])
 * @method Result completeVaultLock(array $args = [])
 * @method Promise completeVaultLockAsync(array $args = [])
 * @method Result createVault(array $args = [])
 * @method Promise createVaultAsync(array $args = [])
 * @method Result deleteArchive(array $args = [])
 * @method Promise deleteArchiveAsync(array $args = [])
 * @method Result deleteVault(array $args = [])
 * @method Promise deleteVaultAsync(array $args = [])
 * @method Result deleteVaultAccessPolicy(array $args = [])
 * @method Promise deleteVaultAccessPolicyAsync(array $args = [])
 * @method Result deleteVaultNotifications(array $args = [])
 * @method Promise deleteVaultNotificationsAsync(array $args = [])
 * @method Result describeJob(array $args = [])
 * @method Promise describeJobAsync(array $args = [])
 * @method Result describeVault(array $args = [])
 * @method Promise describeVaultAsync(array $args = [])
 * @method Result getDataRetrievalPolicy(array $args = [])
 * @method Promise getDataRetrievalPolicyAsync(array $args = [])
 * @method Result getJobOutput(array $args = [])
 * @method Promise getJobOutputAsync(array $args = [])
 * @method Result getVaultAccessPolicy(array $args = [])
 * @method Promise getVaultAccessPolicyAsync(array $args = [])
 * @method Result getVaultLock(array $args = [])
 * @method Promise getVaultLockAsync(array $args = [])
 * @method Result getVaultNotifications(array $args = [])
 * @method Promise getVaultNotificationsAsync(array $args = [])
 * @method Result initiateJob(array $args = [])
 * @method Promise initiateJobAsync(array $args = [])
 * @method Result initiateMultipartUpload(array $args = [])
 * @method Promise initiateMultipartUploadAsync(array $args = [])
 * @method Result initiateVaultLock(array $args = [])
 * @method Promise initiateVaultLockAsync(array $args = [])
 * @method Result listJobs(array $args = [])
 * @method Promise listJobsAsync(array $args = [])
 * @method Result listMultipartUploads(array $args = [])
 * @method Promise listMultipartUploadsAsync(array $args = [])
 * @method Result listParts(array $args = [])
 * @method Promise listPartsAsync(array $args = [])
 * @method Result listProvisionedCapacity(array $args = [])
 * @method Promise listProvisionedCapacityAsync(array $args = [])
 * @method Result listTagsForVault(array $args = [])
 * @method Promise listTagsForVaultAsync(array $args = [])
 * @method Result listVaults(array $args = [])
 * @method Promise listVaultsAsync(array $args = [])
 * @method Result purchaseProvisionedCapacity(array $args = [])
 * @method Promise purchaseProvisionedCapacityAsync(array $args = [])
 * @method Result removeTagsFromVault(array $args = [])
 * @method Promise removeTagsFromVaultAsync(array $args = [])
 * @method Result setDataRetrievalPolicy(array $args = [])
 * @method Promise setDataRetrievalPolicyAsync(array $args = [])
 * @method Result setVaultAccessPolicy(array $args = [])
 * @method Promise setVaultAccessPolicyAsync(array $args = [])
 * @method Result setVaultNotifications(array $args = [])
 * @method Promise setVaultNotificationsAsync(array $args = [])
 * @method Result uploadArchive(array $args = [])
 * @method Promise uploadArchiveAsync(array $args = [])
 * @method Result uploadMultipartPart(array $args = [])
 * @method Promise uploadMultipartPartAsync(array $args = [])
 */
class GlacierClient extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);

        // Setup middleware.
        $stack = $this->getHandlerList();
        $stack->appendBuild($this->getApiVersionMiddleware(), 'glacier.api_version');
        $stack->appendBuild($this->getChecksumsMiddleware(), 'glacier.checksum');
        $stack->appendBuild(
            Middleware::contentType(['UploadArchive', 'UploadPart']),
            'glacier.content_type'
        );
        $stack->appendInit(
            Middleware::sourceFile($this->getApi(), 'body', 'sourceFile'),
            'glacier.source_file'
        );
    }

    /**
     * {@inheritdoc}
     *
     * Sets the default accountId to "-" for all operations.
     */
    public function getCommand($name, array $args = [])
    {
        return parent::getCommand($name, $args + ['accountId' => '-']);
    }

    /**
     * Creates a middleware that updates a command with the content and tree
     * hash headers for upload operations.
     *
     * @return callable
     * @throws CouldNotCreateChecksumException if the body is not seekable.
     */
    private function getChecksumsMiddleware()
    {
        return function (callable $handler) {
            return function (
                CommandInterface $command,
                RequestInterface $request = null
            ) use ($handler) {
                // Accept "ContentSHA256" with a lowercase "c" to match other Glacier params.
                if (!$command['ContentSHA256'] && $command['contentSHA256']) {
                    $command['ContentSHA256'] = $command['contentSHA256'];
                    unset($command['contentSHA256']);
                }

                // If uploading, then make sure checksums are added.
                $name = $command->getName();
                if (($name === 'UploadArchive' || $name === 'UploadMultipartPart')
                    && (!$command['checksum'] || !$command['ContentSHA256'])
                ) {
                    $body = $request->getBody();
                    if (!$body->isSeekable()) {
                        throw new CouldNotCreateChecksumException('sha256');
                    }

                    // Add a tree hash if not provided.
                    if (!$command['checksum']) {
                        $body = new HashingStream(
                            $body, new TreeHash(),
                            function ($result) use (&$request) {
                                $request = $request->withHeader(
                                    'x-amz-sha256-tree-hash',
                                    bin2hex($result)
                                );
                            }
                        );
                    }

                    // Add a linear content hash if not provided.
                    if (!$command['ContentSHA256']) {
                        $body = new HashingStream(
                            $body, new PhpHash('sha256'),
                            function ($result) use ($command) {
                                $command['ContentSHA256'] = bin2hex($result);
                            }
                        );
                    }

                    // Read the stream in order to calculate the hashes.
                    while (!$body->eof()) {
                        $body->read(1048576);
                    }
                    $body->seek(0);
                }

                // Set the content hash header if a value is in the command.
                if ($command['ContentSHA256']) {
                    $request = $request->withHeader(
                        'x-amz-content-sha256',
                        $command['ContentSHA256']
                    );
                }

                return $handler($command, $request);
            };
        };
    }

    /**
     * Creates a middleware that adds the API version header for all requests.
     *
     * @return callable
     */
    private function getApiVersionMiddleware()
    {
        return function (callable $handler) {
            return function (
                CommandInterface $command,
                RequestInterface $request = null
            ) use ($handler) {
                return $handler($command, $request->withHeader(
                    'x-amz-glacier-version',
                    $this->getApi()->getMetadata('apiVersion')
                ));
            };
        };
    }

    /**
     * @internal
     * @codeCoverageIgnore
     */
    public static function applyDocFilters(array $api, array $docs)
    {
        // Add the SourceFile parameter.
        $docs['shapes']['SourceFile']['base'] = 'The path to a file on disk to use instead of the body parameter.';
        $api['shapes']['SourceFile'] = ['type' => 'string'];
        $api['shapes']['UploadArchiveInput']['members']['sourceFile'] = ['shape' => 'SourceFile'];
        $api['shapes']['UploadMultipartPartInput']['members']['sourceFile'] = ['shape' => 'SourceFile'];

        // Add the ContentSHA256 parameter.
        $docs['shapes']['ContentSHA256']['base'] = 'A SHA256 hash of the content of the request body';
        $api['shapes']['ContentSHA256'] = ['type' => 'string'];
        $api['shapes']['UploadArchiveInput']['members']['contentSHA256'] = ['shape' => 'ContentSHA256'];
        $api['shapes']['UploadMultipartPartInput']['members']['contentSHA256'] = ['shape' => 'ContentSHA256'];

        // Add information about "checksum" and "ContentSHA256" being optional.
        $optional = '<div class="alert alert-info">The SDK will compute this value '
            . 'for you on your behalf if it is not supplied.</div>';
        $docs['shapes']['checksum']['append'] = $optional;
        $docs['shapes']['ContentSHA256']['append'] = $optional;

        // Make "accountId" optional for all operations.
        foreach ($api['operations'] as $operation) {
            $inputShape =& $api['shapes'][$operation['input']['shape']];
            $accountIdIndex = array_search('accountId', $inputShape['required']);
            unset($inputShape['required'][$accountIdIndex]);
        }
        // Add information about the default value for "accountId".
        $optional = '<div class="alert alert-info">The SDK will set this value to "-" by default.</div>';
        foreach ($docs['shapes']['string']['refs'] as $name => &$ref) {
            if (strpos($name, 'accountId')) {
                $ref .= $optional;
            }
        }

        return [
            new Service($api, ApiProvider::defaultProvider()),
            new DocModel($docs)
        ];
    }
}
