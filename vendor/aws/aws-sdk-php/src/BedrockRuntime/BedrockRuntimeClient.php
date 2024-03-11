<?php
namespace Aws\BedrockRuntime;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Bedrock Runtime** service.
 * @method Result invokeModel(array $args = [])
 * @method Promise invokeModelAsync(array $args = [])
 * @method Result invokeModelWithResponseStream(array $args = [])
 * @method Promise invokeModelWithResponseStreamAsync(array $args = [])
 */
class BedrockRuntimeClient extends AwsClient {}
