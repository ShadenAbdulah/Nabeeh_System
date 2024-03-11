<?php
namespace Aws\IoTJobsDataPlane;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS IoT Jobs Data Plane** service.
 * @method Result describeJobExecution(array $args = [])
 * @method Promise describeJobExecutionAsync(array $args = [])
 * @method Result getPendingJobExecutions(array $args = [])
 * @method Promise getPendingJobExecutionsAsync(array $args = [])
 * @method Result startNextPendingJobExecution(array $args = [])
 * @method Promise startNextPendingJobExecutionAsync(array $args = [])
 * @method Result updateJobExecution(array $args = [])
 * @method Promise updateJobExecutionAsync(array $args = [])
 */
class IoTJobsDataPlaneClient extends AwsClient {}
