<?php
namespace Aws\MediaStore;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Elemental MediaStore** service.
 * @method Result createContainer(array $args = [])
 * @method Promise createContainerAsync(array $args = [])
 * @method Result deleteContainer(array $args = [])
 * @method Promise deleteContainerAsync(array $args = [])
 * @method Result deleteContainerPolicy(array $args = [])
 * @method Promise deleteContainerPolicyAsync(array $args = [])
 * @method Result deleteCorsPolicy(array $args = [])
 * @method Promise deleteCorsPolicyAsync(array $args = [])
 * @method Result deleteLifecyclePolicy(array $args = [])
 * @method Promise deleteLifecyclePolicyAsync(array $args = [])
 * @method Result deleteMetricPolicy(array $args = [])
 * @method Promise deleteMetricPolicyAsync(array $args = [])
 * @method Result describeContainer(array $args = [])
 * @method Promise describeContainerAsync(array $args = [])
 * @method Result getContainerPolicy(array $args = [])
 * @method Promise getContainerPolicyAsync(array $args = [])
 * @method Result getCorsPolicy(array $args = [])
 * @method Promise getCorsPolicyAsync(array $args = [])
 * @method Result getLifecyclePolicy(array $args = [])
 * @method Promise getLifecyclePolicyAsync(array $args = [])
 * @method Result getMetricPolicy(array $args = [])
 * @method Promise getMetricPolicyAsync(array $args = [])
 * @method Result listContainers(array $args = [])
 * @method Promise listContainersAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putContainerPolicy(array $args = [])
 * @method Promise putContainerPolicyAsync(array $args = [])
 * @method Result putCorsPolicy(array $args = [])
 * @method Promise putCorsPolicyAsync(array $args = [])
 * @method Result putLifecyclePolicy(array $args = [])
 * @method Promise putLifecyclePolicyAsync(array $args = [])
 * @method Result putMetricPolicy(array $args = [])
 * @method Promise putMetricPolicyAsync(array $args = [])
 * @method Result startAccessLogging(array $args = [])
 * @method Promise startAccessLoggingAsync(array $args = [])
 * @method Result stopAccessLogging(array $args = [])
 * @method Promise stopAccessLoggingAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class MediaStoreClient extends AwsClient {}
