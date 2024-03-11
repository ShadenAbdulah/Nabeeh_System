<?php
namespace Aws\HealthLake;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon HealthLake** service.
 * @method Result createFHIRDatastore(array $args = [])
 * @method Promise createFHIRDatastoreAsync(array $args = [])
 * @method Result deleteFHIRDatastore(array $args = [])
 * @method Promise deleteFHIRDatastoreAsync(array $args = [])
 * @method Result describeFHIRDatastore(array $args = [])
 * @method Promise describeFHIRDatastoreAsync(array $args = [])
 * @method Result describeFHIRExportJob(array $args = [])
 * @method Promise describeFHIRExportJobAsync(array $args = [])
 * @method Result describeFHIRImportJob(array $args = [])
 * @method Promise describeFHIRImportJobAsync(array $args = [])
 * @method Result listFHIRDatastores(array $args = [])
 * @method Promise listFHIRDatastoresAsync(array $args = [])
 * @method Result listFHIRExportJobs(array $args = [])
 * @method Promise listFHIRExportJobsAsync(array $args = [])
 * @method Result listFHIRImportJobs(array $args = [])
 * @method Promise listFHIRImportJobsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startFHIRExportJob(array $args = [])
 * @method Promise startFHIRExportJobAsync(array $args = [])
 * @method Result startFHIRImportJob(array $args = [])
 * @method Promise startFHIRImportJobAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class HealthLakeClient extends AwsClient {}
