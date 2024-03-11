<?php
namespace Aws\SageMakerFeatureStoreRuntime;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon SageMaker Feature Store Runtime** service.
 * @method Result batchGetRecord(array $args = [])
 * @method Promise batchGetRecordAsync(array $args = [])
 * @method Result deleteRecord(array $args = [])
 * @method Promise deleteRecordAsync(array $args = [])
 * @method Result getRecord(array $args = [])
 * @method Promise getRecordAsync(array $args = [])
 * @method Result putRecord(array $args = [])
 * @method Promise putRecordAsync(array $args = [])
 */
class SageMakerFeatureStoreRuntimeClient extends AwsClient {}
