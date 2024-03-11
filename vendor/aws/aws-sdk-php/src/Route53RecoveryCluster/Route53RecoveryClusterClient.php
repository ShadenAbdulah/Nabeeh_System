<?php
namespace Aws\Route53RecoveryCluster;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Route53 Recovery Cluster** service.
 * @method Result getRoutingControlState(array $args = [])
 * @method Promise getRoutingControlStateAsync(array $args = [])
 * @method Result listRoutingControls(array $args = [])
 * @method Promise listRoutingControlsAsync(array $args = [])
 * @method Result updateRoutingControlState(array $args = [])
 * @method Promise updateRoutingControlStateAsync(array $args = [])
 * @method Result updateRoutingControlStates(array $args = [])
 * @method Promise updateRoutingControlStatesAsync(array $args = [])
 */
class Route53RecoveryClusterClient extends AwsClient {}
