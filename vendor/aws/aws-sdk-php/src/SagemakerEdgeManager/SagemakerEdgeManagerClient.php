<?php
namespace Aws\SagemakerEdgeManager;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Sagemaker Edge Manager** service.
 * @method Result getDeployments(array $args = [])
 * @method Promise getDeploymentsAsync(array $args = [])
 * @method Result getDeviceRegistration(array $args = [])
 * @method Promise getDeviceRegistrationAsync(array $args = [])
 * @method Result sendHeartbeat(array $args = [])
 * @method Promise sendHeartbeatAsync(array $args = [])
 */
class SagemakerEdgeManagerClient extends AwsClient {}
