<?php
namespace Aws\SageMakerMetrics;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon SageMaker Metrics Service** service.
 * @method Result batchPutMetrics(array $args = [])
 * @method Promise batchPutMetricsAsync(array $args = [])
 */
class SageMakerMetricsClient extends AwsClient {}
