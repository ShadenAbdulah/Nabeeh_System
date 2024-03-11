<?php
namespace Aws\BCMDataExports;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Billing and Cost Management Data Exports** service.
 * @method Result createExport(array $args = [])
 * @method Promise createExportAsync(array $args = [])
 * @method Result deleteExport(array $args = [])
 * @method Promise deleteExportAsync(array $args = [])
 * @method Result getExecution(array $args = [])
 * @method Promise getExecutionAsync(array $args = [])
 * @method Result getExport(array $args = [])
 * @method Promise getExportAsync(array $args = [])
 * @method Result getTable(array $args = [])
 * @method Promise getTableAsync(array $args = [])
 * @method Result listExecutions(array $args = [])
 * @method Promise listExecutionsAsync(array $args = [])
 * @method Result listExports(array $args = [])
 * @method Promise listExportsAsync(array $args = [])
 * @method Result listTables(array $args = [])
 * @method Promise listTablesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateExport(array $args = [])
 * @method Promise updateExportAsync(array $args = [])
 */
class BCMDataExportsClient extends AwsClient {}
