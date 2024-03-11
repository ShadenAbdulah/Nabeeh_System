<?php
namespace Aws\EMRServerless;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **EMR Serverless** service.
 * @method Result cancelJobRun(array $args = [])
 * @method Promise cancelJobRunAsync(array $args = [])
 * @method Result createApplication(array $args = [])
 * @method Promise createApplicationAsync(array $args = [])
 * @method Result deleteApplication(array $args = [])
 * @method Promise deleteApplicationAsync(array $args = [])
 * @method Result getApplication(array $args = [])
 * @method Promise getApplicationAsync(array $args = [])
 * @method Result getDashboardForJobRun(array $args = [])
 * @method Promise getDashboardForJobRunAsync(array $args = [])
 * @method Result getJobRun(array $args = [])
 * @method Promise getJobRunAsync(array $args = [])
 * @method Result listApplications(array $args = [])
 * @method Promise listApplicationsAsync(array $args = [])
 * @method Result listJobRuns(array $args = [])
 * @method Promise listJobRunsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startApplication(array $args = [])
 * @method Promise startApplicationAsync(array $args = [])
 * @method Result startJobRun(array $args = [])
 * @method Promise startJobRunAsync(array $args = [])
 * @method Result stopApplication(array $args = [])
 * @method Promise stopApplicationAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateApplication(array $args = [])
 * @method Promise updateApplicationAsync(array $args = [])
 */
class EMRServerlessClient extends AwsClient {}
