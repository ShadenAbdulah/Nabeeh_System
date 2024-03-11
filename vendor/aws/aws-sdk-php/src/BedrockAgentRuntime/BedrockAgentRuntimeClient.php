<?php
namespace Aws\BedrockAgentRuntime;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Agents for Amazon Bedrock Runtime** service.
 * @method Result invokeAgent(array $args = [])
 * @method Promise invokeAgentAsync(array $args = [])
 * @method Result retrieve(array $args = [])
 * @method Promise retrieveAsync(array $args = [])
 * @method Result retrieveAndGenerate(array $args = [])
 * @method Promise retrieveAndGenerateAsync(array $args = [])
 */
class BedrockAgentRuntimeClient extends AwsClient {}
