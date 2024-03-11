<?php
namespace Aws\AugmentedAIRuntime;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Augmented AI Runtime** service.
 * @method Result deleteHumanLoop(array $args = [])
 * @method Promise deleteHumanLoopAsync(array $args = [])
 * @method Result describeHumanLoop(array $args = [])
 * @method Promise describeHumanLoopAsync(array $args = [])
 * @method Result listHumanLoops(array $args = [])
 * @method Promise listHumanLoopsAsync(array $args = [])
 * @method Result startHumanLoop(array $args = [])
 * @method Promise startHumanLoopAsync(array $args = [])
 * @method Result stopHumanLoop(array $args = [])
 * @method Promise stopHumanLoopAsync(array $args = [])
 */
class AugmentedAIRuntimeClient extends AwsClient {}
