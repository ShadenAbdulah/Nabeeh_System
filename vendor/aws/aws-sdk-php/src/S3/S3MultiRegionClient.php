<?php
namespace Aws\S3;

use Aws\CacheInterface;
use Aws\CommandInterface;
use Aws\LruArrayCache;
use Aws\MultiRegionClient as BaseClient;
use Aws\Exception\AwsException;
use Aws\Result;
use Aws\S3\Exception\PermanentRedirectException;
use GuzzleHttp\Promise;
use InvalidArgumentException;

/**
 * **Amazon Simple Storage Service** multi-region client.
 *
 * @method Result abortMultipartUpload(array $args = [])
 * @method Promise\Promise abortMultipartUploadAsync(array $args = [])
 * @method Result completeMultipartUpload(array $args = [])
 * @method Promise\Promise completeMultipartUploadAsync(array $args = [])
 * @method Result copyObject(array $args = [])
 * @method Promise\Promise copyObjectAsync(array $args = [])
 * @method Result createBucket(array $args = [])
 * @method Promise\Promise createBucketAsync(array $args = [])
 * @method Result createMultipartUpload(array $args = [])
 * @method Promise\Promise createMultipartUploadAsync(array $args = [])
 * @method Result createSession(array $args = [])
 * @method Promise\Promise createSessionAsync(array $args = [])
 * @method Result deleteBucket(array $args = [])
 * @method Promise\Promise deleteBucketAsync(array $args = [])
 * @method Result deleteBucketAnalyticsConfiguration(array $args = [])
 * @method Promise\Promise deleteBucketAnalyticsConfigurationAsync(array $args = [])
 * @method Result deleteBucketCors(array $args = [])
 * @method Promise\Promise deleteBucketCorsAsync(array $args = [])
 * @method Result deleteBucketEncryption(array $args = [])
 * @method Promise\Promise deleteBucketEncryptionAsync(array $args = [])
 * @method Result deleteBucketIntelligentTieringConfiguration(array $args = [])
 * @method Promise\Promise deleteBucketIntelligentTieringConfigurationAsync(array $args = [])
 * @method Result deleteBucketInventoryConfiguration(array $args = [])
 * @method Promise\Promise deleteBucketInventoryConfigurationAsync(array $args = [])
 * @method Result deleteBucketLifecycle(array $args = [])
 * @method Promise\Promise deleteBucketLifecycleAsync(array $args = [])
 * @method Result deleteBucketMetricsConfiguration(array $args = [])
 * @method Promise\Promise deleteBucketMetricsConfigurationAsync(array $args = [])
 * @method Result deleteBucketOwnershipControls(array $args = [])
 * @method Promise\Promise deleteBucketOwnershipControlsAsync(array $args = [])
 * @method Result deleteBucketPolicy(array $args = [])
 * @method Promise\Promise deleteBucketPolicyAsync(array $args = [])
 * @method Result deleteBucketReplication(array $args = [])
 * @method Promise\Promise deleteBucketReplicationAsync(array $args = [])
 * @method Result deleteBucketTagging(array $args = [])
 * @method Promise\Promise deleteBucketTaggingAsync(array $args = [])
 * @method Result deleteBucketWebsite(array $args = [])
 * @method Promise\Promise deleteBucketWebsiteAsync(array $args = [])
 * @method Result deleteObject(array $args = [])
 * @method Promise\Promise deleteObjectAsync(array $args = [])
 * @method Result deleteObjectTagging(array $args = [])
 * @method Promise\Promise deleteObjectTaggingAsync(array $args = [])
 * @method Result deleteObjects(array $args = [])
 * @method Promise\Promise deleteObjectsAsync(array $args = [])
 * @method Result deletePublicAccessBlock(array $args = [])
 * @method Promise\Promise deletePublicAccessBlockAsync(array $args = [])
 * @method Result getBucketAccelerateConfiguration(array $args = [])
 * @method Promise\Promise getBucketAccelerateConfigurationAsync(array $args = [])
 * @method Result getBucketAcl(array $args = [])
 * @method Promise\Promise getBucketAclAsync(array $args = [])
 * @method Result getBucketAnalyticsConfiguration(array $args = [])
 * @method Promise\Promise getBucketAnalyticsConfigurationAsync(array $args = [])
 * @method Result getBucketCors(array $args = [])
 * @method Promise\Promise getBucketCorsAsync(array $args = [])
 * @method Result getBucketEncryption(array $args = [])
 * @method Promise\Promise getBucketEncryptionAsync(array $args = [])
 * @method Result getBucketIntelligentTieringConfiguration(array $args = [])
 * @method Promise\Promise getBucketIntelligentTieringConfigurationAsync(array $args = [])
 * @method Result getBucketInventoryConfiguration(array $args = [])
 * @method Promise\Promise getBucketInventoryConfigurationAsync(array $args = [])
 * @method Result getBucketLifecycle(array $args = [])
 * @method Promise\Promise getBucketLifecycleAsync(array $args = [])
 * @method Result getBucketLifecycleConfiguration(array $args = [])
 * @method Promise\Promise getBucketLifecycleConfigurationAsync(array $args = [])
 * @method Result getBucketLocation(array $args = [])
 * @method Promise\Promise getBucketLocationAsync(array $args = [])
 * @method Result getBucketLogging(array $args = [])
 * @method Promise\Promise getBucketLoggingAsync(array $args = [])
 * @method Result getBucketMetricsConfiguration(array $args = [])
 * @method Promise\Promise getBucketMetricsConfigurationAsync(array $args = [])
 * @method Result getBucketNotification(array $args = [])
 * @method Promise\Promise getBucketNotificationAsync(array $args = [])
 * @method Result getBucketNotificationConfiguration(array $args = [])
 * @method Promise\Promise getBucketNotificationConfigurationAsync(array $args = [])
 * @method Result getBucketOwnershipControls(array $args = [])
 * @method Promise\Promise getBucketOwnershipControlsAsync(array $args = [])
 * @method Result getBucketPolicy(array $args = [])
 * @method Promise\Promise getBucketPolicyAsync(array $args = [])
 * @method Result getBucketPolicyStatus(array $args = [])
 * @method Promise\Promise getBucketPolicyStatusAsync(array $args = [])
 * @method Result getBucketReplication(array $args = [])
 * @method Promise\Promise getBucketReplicationAsync(array $args = [])
 * @method Result getBucketRequestPayment(array $args = [])
 * @method Promise\Promise getBucketRequestPaymentAsync(array $args = [])
 * @method Result getBucketTagging(array $args = [])
 * @method Promise\Promise getBucketTaggingAsync(array $args = [])
 * @method Result getBucketVersioning(array $args = [])
 * @method Promise\Promise getBucketVersioningAsync(array $args = [])
 * @method Result getBucketWebsite(array $args = [])
 * @method Promise\Promise getBucketWebsiteAsync(array $args = [])
 * @method Result getObject(array $args = [])
 * @method Promise\Promise getObjectAsync(array $args = [])
 * @method Result getObjectAcl(array $args = [])
 * @method Promise\Promise getObjectAclAsync(array $args = [])
 * @method Result getObjectAttributes(array $args = [])
 * @method Promise\Promise getObjectAttributesAsync(array $args = [])
 * @method Result getObjectLegalHold(array $args = [])
 * @method Promise\Promise getObjectLegalHoldAsync(array $args = [])
 * @method Result getObjectLockConfiguration(array $args = [])
 * @method Promise\Promise getObjectLockConfigurationAsync(array $args = [])
 * @method Result getObjectRetention(array $args = [])
 * @method Promise\Promise getObjectRetentionAsync(array $args = [])
 * @method Result getObjectTagging(array $args = [])
 * @method Promise\Promise getObjectTaggingAsync(array $args = [])
 * @method Result getObjectTorrent(array $args = [])
 * @method Promise\Promise getObjectTorrentAsync(array $args = [])
 * @method Result getPublicAccessBlock(array $args = [])
 * @method Promise\Promise getPublicAccessBlockAsync(array $args = [])
 * @method Result headBucket(array $args = [])
 * @method Promise\Promise headBucketAsync(array $args = [])
 * @method Result headObject(array $args = [])
 * @method Promise\Promise headObjectAsync(array $args = [])
 * @method Result listBucketAnalyticsConfigurations(array $args = [])
 * @method Promise\Promise listBucketAnalyticsConfigurationsAsync(array $args = [])
 * @method Result listBucketIntelligentTieringConfigurations(array $args = [])
 * @method Promise\Promise listBucketIntelligentTieringConfigurationsAsync(array $args = [])
 * @method Result listBucketInventoryConfigurations(array $args = [])
 * @method Promise\Promise listBucketInventoryConfigurationsAsync(array $args = [])
 * @method Result listBucketMetricsConfigurations(array $args = [])
 * @method Promise\Promise listBucketMetricsConfigurationsAsync(array $args = [])
 * @method Result listBuckets(array $args = [])
 * @method Promise\Promise listBucketsAsync(array $args = [])
 * @method Result listDirectoryBuckets(array $args = [])
 * @method Promise\Promise listDirectoryBucketsAsync(array $args = [])
 * @method Result listMultipartUploads(array $args = [])
 * @method Promise\Promise listMultipartUploadsAsync(array $args = [])
 * @method Result listObjectVersions(array $args = [])
 * @method Promise\Promise listObjectVersionsAsync(array $args = [])
 * @method Result listObjects(array $args = [])
 * @method Promise\Promise listObjectsAsync(array $args = [])
 * @method Result listObjectsV2(array $args = [])
 * @method Promise\Promise listObjectsV2Async(array $args = [])
 * @method Result listParts(array $args = [])
 * @method Promise\Promise listPartsAsync(array $args = [])
 * @method Result putBucketAccelerateConfiguration(array $args = [])
 * @method Promise\Promise putBucketAccelerateConfigurationAsync(array $args = [])
 * @method Result putBucketAcl(array $args = [])
 * @method Promise\Promise putBucketAclAsync(array $args = [])
 * @method Result putBucketAnalyticsConfiguration(array $args = [])
 * @method Promise\Promise putBucketAnalyticsConfigurationAsync(array $args = [])
 * @method Result putBucketCors(array $args = [])
 * @method Promise\Promise putBucketCorsAsync(array $args = [])
 * @method Result putBucketEncryption(array $args = [])
 * @method Promise\Promise putBucketEncryptionAsync(array $args = [])
 * @method Result putBucketIntelligentTieringConfiguration(array $args = [])
 * @method Promise\Promise putBucketIntelligentTieringConfigurationAsync(array $args = [])
 * @method Result putBucketInventoryConfiguration(array $args = [])
 * @method Promise\Promise putBucketInventoryConfigurationAsync(array $args = [])
 * @method Result putBucketLifecycle(array $args = [])
 * @method Promise\Promise putBucketLifecycleAsync(array $args = [])
 * @method Result putBucketLifecycleConfiguration(array $args = [])
 * @method Promise\Promise putBucketLifecycleConfigurationAsync(array $args = [])
 * @method Result putBucketLogging(array $args = [])
 * @method Promise\Promise putBucketLoggingAsync(array $args = [])
 * @method Result putBucketMetricsConfiguration(array $args = [])
 * @method Promise\Promise putBucketMetricsConfigurationAsync(array $args = [])
 * @method Result putBucketNotification(array $args = [])
 * @method Promise\Promise putBucketNotificationAsync(array $args = [])
 * @method Result putBucketNotificationConfiguration(array $args = [])
 * @method Promise\Promise putBucketNotificationConfigurationAsync(array $args = [])
 * @method Result putBucketOwnershipControls(array $args = [])
 * @method Promise\Promise putBucketOwnershipControlsAsync(array $args = [])
 * @method Result putBucketPolicy(array $args = [])
 * @method Promise\Promise putBucketPolicyAsync(array $args = [])
 * @method Result putBucketReplication(array $args = [])
 * @method Promise\Promise putBucketReplicationAsync(array $args = [])
 * @method Result putBucketRequestPayment(array $args = [])
 * @method Promise\Promise putBucketRequestPaymentAsync(array $args = [])
 * @method Result putBucketTagging(array $args = [])
 * @method Promise\Promise putBucketTaggingAsync(array $args = [])
 * @method Result putBucketVersioning(array $args = [])
 * @method Promise\Promise putBucketVersioningAsync(array $args = [])
 * @method Result putBucketWebsite(array $args = [])
 * @method Promise\Promise putBucketWebsiteAsync(array $args = [])
 * @method Result putObject(array $args = [])
 * @method Promise\Promise putObjectAsync(array $args = [])
 * @method Result putObjectAcl(array $args = [])
 * @method Promise\Promise putObjectAclAsync(array $args = [])
 * @method Result putObjectLegalHold(array $args = [])
 * @method Promise\Promise putObjectLegalHoldAsync(array $args = [])
 * @method Result putObjectLockConfiguration(array $args = [])
 * @method Promise\Promise putObjectLockConfigurationAsync(array $args = [])
 * @method Result putObjectRetention(array $args = [])
 * @method Promise\Promise putObjectRetentionAsync(array $args = [])
 * @method Result putObjectTagging(array $args = [])
 * @method Promise\Promise putObjectTaggingAsync(array $args = [])
 * @method Result putPublicAccessBlock(array $args = [])
 * @method Promise\Promise putPublicAccessBlockAsync(array $args = [])
 * @method Result restoreObject(array $args = [])
 * @method Promise\Promise restoreObjectAsync(array $args = [])
 * @method Result selectObjectContent(array $args = [])
 * @method Promise\Promise selectObjectContentAsync(array $args = [])
 * @method Result uploadPart(array $args = [])
 * @method Promise\Promise uploadPartAsync(array $args = [])
 * @method Result uploadPartCopy(array $args = [])
 * @method Promise\Promise uploadPartCopyAsync(array $args = [])
 * @method Result writeGetObjectResponse(array $args = [])
 * @method Promise\Promise writeGetObjectResponseAsync(array $args = [])
 */
class S3MultiRegionClient extends BaseClient implements S3ClientInterface
{
    use S3ClientTrait;

    /** @var CacheInterface */
    private $cache;

    public static function getArguments()
    {
        $args = parent::getArguments();
        $regionDef = $args['region'] + ['default' => function (array &$args) {
            $availableRegions = array_keys($args['partition']['regions']);
            return end($availableRegions);
        }];
        unset($args['region']);

        return $args + [
            'bucket_region_cache' => [
                'type' => 'config',
                'valid' => [CacheInterface::class],
                'doc' => 'Cache of regions in which given buckets are located.',
                'default' => function () { return new LruArrayCache; },
            ],
            'region' => $regionDef,
        ];
    }

    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->cache = $this->getConfig('bucket_region_cache');

        $this->getHandlerList()->prependInit(
            $this->determineRegionMiddleware(),
            'determine_region'
        );
    }

    private function determineRegionMiddleware()
    {
        return function (callable $handler) {
            return function (CommandInterface $command) use ($handler) {
                $cacheKey = $this->getCacheKey($command['Bucket']);
                if (
                    empty($command['@region']) &&
                    $region = $this->cache->get($cacheKey)
                ) {
                    $command['@region'] = $region;
                }

                return Promise\Coroutine::of(function () use (
                    $handler,
                    $command,
                    $cacheKey
                ) {
                    try {
                        yield $handler($command);
                    } catch (PermanentRedirectException $e) {
                        if (empty($command['Bucket'])) {
                            throw $e;
                        }
                        $result = $e->getResult();
                        $region = null;
                        if (isset($result['@metadata']['headers']['x-amz-bucket-region'])) {
                            $region = $result['@metadata']['headers']['x-amz-bucket-region'];
                            $this->cache->set($cacheKey, $region);
                        } else {
                            $region = (yield $this->determineBucketRegionAsync(
                                $command['Bucket']
                            ));
                        }

                        $command['@region'] = $region;
                        yield $handler($command);
                    } catch (AwsException $e) {
                        if ($e->getAwsErrorCode() === 'AuthorizationHeaderMalformed') {
                            $region = $this->determineBucketRegionFromExceptionBody(
                                $e->getResponse()
                            );
                            if (!empty($region)) {
                                $this->cache->set($cacheKey, $region);

                                $command['@region'] = $region;
                                yield $handler($command);
                            } else {
                                throw $e;
                            }
                        } else {
                            throw $e;
                        }
                    }
                });
            };
        };
    }

    public function createPresignedRequest(CommandInterface $command, $expires, array $options = [])
    {
        if (empty($command['Bucket'])) {
            throw new InvalidArgumentException('The S3\\MultiRegionClient'
                . ' cannot create presigned requests for commands without a'
                . ' specified bucket.');
        }

        /** @var S3ClientInterface $client */
        $client = $this->getClientFromPool(
            $this->determineBucketRegion($command['Bucket'])
        );
        return $client->createPresignedRequest(
            $client->getCommand($command->getName(), $command->toArray()),
            $expires
        );
    }

    public function getObjectUrl($bucket, $key)
    {
        /** @var S3Client $regionalClient */
        $regionalClient = $this->getClientFromPool(
            $this->determineBucketRegion($bucket)
        );

        return $regionalClient->getObjectUrl($bucket, $key);
    }

    public function determineBucketRegionAsync($bucketName)
    {
        $cacheKey = $this->getCacheKey($bucketName);
        if ($cached = $this->cache->get($cacheKey)) {
            return Promise\Create::promiseFor($cached);
        }

        /** @var S3ClientInterface $regionalClient */
        $regionalClient = $this->getClientFromPool();
        return $regionalClient->determineBucketRegionAsync($bucketName)
            ->then(
                function ($region) use ($cacheKey) {
                    $this->cache->set($cacheKey, $region);

                    return $region;
                }
            );
    }

    private function getCacheKey($bucketName)
    {
        return "aws:s3:{$bucketName}:location";
    }
}
