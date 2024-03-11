<?php
namespace Aws\ImportExport;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Import/Export** service.
 * @method Result cancelJob(array $args = [])
 * @method Promise cancelJobAsync(array $args = [])
 * @method Result createJob(array $args = [])
 * @method Promise createJobAsync(array $args = [])
 * @method Result getShippingLabel(array $args = [])
 * @method Promise getShippingLabelAsync(array $args = [])
 * @method Result getStatus(array $args = [])
 * @method Promise getStatusAsync(array $args = [])
 * @method Result listJobs(array $args = [])
 * @method Promise listJobsAsync(array $args = [])
 * @method Result updateJob(array $args = [])
 * @method Promise updateJobAsync(array $args = [])
 */
class ImportExportClient extends AwsClient {}
