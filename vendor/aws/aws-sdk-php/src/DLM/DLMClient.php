<?php
namespace Aws\DLM;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Data Lifecycle Manager** service.
 * @method Result createLifecyclePolicy(array $args = [])
 * @method Promise createLifecyclePolicyAsync(array $args = [])
 * @method Result deleteLifecyclePolicy(array $args = [])
 * @method Promise deleteLifecyclePolicyAsync(array $args = [])
 * @method Result getLifecyclePolicies(array $args = [])
 * @method Promise getLifecyclePoliciesAsync(array $args = [])
 * @method Result getLifecyclePolicy(array $args = [])
 * @method Promise getLifecyclePolicyAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateLifecyclePolicy(array $args = [])
 * @method Promise updateLifecyclePolicyAsync(array $args = [])
 */
class DLMClient extends AwsClient {}
