<?php
namespace Aws\SSOOIDC;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS SSO OIDC** service.
 * @method Result createToken(array $args = [])
 * @method Promise createTokenAsync(array $args = [])
 * @method Result createTokenWithIAM(array $args = [])
 * @method Promise createTokenWithIAMAsync(array $args = [])
 * @method Result registerClient(array $args = [])
 * @method Promise registerClientAsync(array $args = [])
 * @method Result startDeviceAuthorization(array $args = [])
 * @method Promise startDeviceAuthorizationAsync(array $args = [])
 */
class SSOOIDCClient extends AwsClient {}
