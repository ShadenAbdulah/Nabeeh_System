<?php
namespace Aws\IoTSecureTunneling;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS IoT Secure Tunneling** service.
 * @method Result closeTunnel(array $args = [])
 * @method Promise closeTunnelAsync(array $args = [])
 * @method Result describeTunnel(array $args = [])
 * @method Promise describeTunnelAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTunnels(array $args = [])
 * @method Promise listTunnelsAsync(array $args = [])
 * @method Result openTunnel(array $args = [])
 * @method Promise openTunnelAsync(array $args = [])
 * @method Result rotateTunnelAccessToken(array $args = [])
 * @method Promise rotateTunnelAccessTokenAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class IoTSecureTunnelingClient extends AwsClient {}
