<?php
namespace Aws\Sts;

use Aws\AwsClient;
use Aws\CacheInterface;
use Aws\Credentials\Credentials;
use Aws\Result;
use Aws\Sts\RegionalEndpoints\ConfigurationProvider;
use Closure;
use DateTimeInterface;
use GuzzleHttp\Promise\Promise;
use InvalidArgumentException;

/**
 * This client is used to interact with the **AWS Security Token Service (AWS STS)**.
 *
 * @method Result assumeRole(array $args = [])
 * @method Promise assumeRoleAsync(array $args = [])
 * @method Result assumeRoleWithSAML(array $args = [])
 * @method Promise assumeRoleWithSAMLAsync(array $args = [])
 * @method Result assumeRoleWithWebIdentity(array $args = [])
 * @method Promise assumeRoleWithWebIdentityAsync(array $args = [])
 * @method Result decodeAuthorizationMessage(array $args = [])
 * @method Promise decodeAuthorizationMessageAsync(array $args = [])
 * @method Result getAccessKeyInfo(array $args = [])
 * @method Promise getAccessKeyInfoAsync(array $args = [])
 * @method Result getCallerIdentity(array $args = [])
 * @method Promise getCallerIdentityAsync(array $args = [])
 * @method Result getFederationToken(array $args = [])
 * @method Promise getFederationTokenAsync(array $args = [])
 * @method Result getSessionToken(array $args = [])
 * @method Promise getSessionTokenAsync(array $args = [])
 */
class StsClient extends AwsClient
{

    /**
     * {@inheritdoc}
     *
     * In addition to the options available to
     * {@see AwsClient::__construct}, StsClient accepts the following
     * options:
     *
     * - sts_regional_endpoints:
     *   (Aws\Sts\RegionalEndpoints\ConfigurationInterface|Aws\CacheInterface\|callable|string|array)
     *   Specifies whether to use regional or legacy endpoints for legacy regions.
     *   Provide an Aws\Sts\RegionalEndpoints\ConfigurationInterface object, an
     *   instance of Aws\CacheInterface, a callable configuration provider used
     *   to create endpoint configuration, a string value of `legacy` or
     *   `regional`, or an associative array with the following keys:
     *   endpoint_types (string)  Set to `legacy` or `regional`, defaults to
     *   `legacy`
     *
     * @param array $args
     */
    public function __construct(array $args)
    {
        if (
            !isset($args['sts_regional_endpoints'])
            || $args['sts_regional_endpoints'] instanceof CacheInterface
        ) {
            $args['sts_regional_endpoints'] = ConfigurationProvider::defaultProvider($args);
        }
        $this->addBuiltIns($args);
        parent::__construct($args);
    }

    /**
     * Creates credentials from the result of an STS operations
     *
     * @param Result $result Result of an STS operation
     *
     * @return Credentials
     * @throws InvalidArgumentException if the result contains no credentials
     */
    public function createCredentials(Result $result)
    {
        if (!$result->hasKey('Credentials')) {
            throw new InvalidArgumentException('Result contains no credentials');
        }

        $c = $result['Credentials'];

        return new Credentials(
            $c['AccessKeyId'],
            $c['SecretAccessKey'],
            isset($c['SessionToken']) ? $c['SessionToken'] : null,
            isset($c['Expiration']) && $c['Expiration'] instanceof DateTimeInterface
                ? (int) $c['Expiration']->format('U')
                : null
        );
    }

    /**
     * Adds service-specific client built-in value
     *
     * @return void
     */
    private function addBuiltIns($args)
    {
        $key = 'AWS::STS::UseGlobalEndpoint';
        $result = $args['sts_regional_endpoints'] instanceof Closure ?
            $args['sts_regional_endpoints']()->wait() : $args['sts_regional_endpoints'];

        if (is_string($result)) {
            if ($result === 'regional') {
                $value = false;
            } else if ($result === 'legacy') {
                $value = true;
            } else {
                return;
            }
        } else {
            if ($result->getEndpointsType() === 'regional') {
                $value = false;
            } else {
                $value = true;
            }
        }

        $this->clientBuiltIns[$key] = $value;
    }
}
