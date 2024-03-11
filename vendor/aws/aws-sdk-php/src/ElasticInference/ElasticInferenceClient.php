<?php
namespace Aws\ElasticInference;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Elastic  Inference** service.
 * @method Result describeAcceleratorOfferings(array $args = [])
 * @method Promise describeAcceleratorOfferingsAsync(array $args = [])
 * @method Result describeAcceleratorTypes(array $args = [])
 * @method Promise describeAcceleratorTypesAsync(array $args = [])
 * @method Result describeAccelerators(array $args = [])
 * @method Promise describeAcceleratorsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class ElasticInferenceClient extends AwsClient {}
