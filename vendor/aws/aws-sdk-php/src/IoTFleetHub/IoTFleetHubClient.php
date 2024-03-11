<?php
namespace Aws\IoTFleetHub;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS IoT Fleet Hub** service.
 * @method Result createApplication(array $args = [])
 * @method Promise createApplicationAsync(array $args = [])
 * @method Result deleteApplication(array $args = [])
 * @method Promise deleteApplicationAsync(array $args = [])
 * @method Result describeApplication(array $args = [])
 * @method Promise describeApplicationAsync(array $args = [])
 * @method Result listApplications(array $args = [])
 * @method Promise listApplicationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateApplication(array $args = [])
 * @method Promise updateApplicationAsync(array $args = [])
 */
class IoTFleetHubClient extends AwsClient {}
