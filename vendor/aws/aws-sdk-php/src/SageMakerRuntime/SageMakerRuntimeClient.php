<?php
namespace Aws\SageMakerRuntime;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon SageMaker Runtime** service.
 * @method Result invokeEndpoint(array $args = [])
 * @method Promise invokeEndpointAsync(array $args = [])
 * @method Result invokeEndpointAsync(array $args = [])
 * @method Promise invokeEndpointAsyncAsync(array $args = [])
 * @method Result invokeEndpointWithResponseStream(array $args = [])
 * @method Promise invokeEndpointWithResponseStreamAsync(array $args = [])
 */
class SageMakerRuntimeClient extends AwsClient {}
