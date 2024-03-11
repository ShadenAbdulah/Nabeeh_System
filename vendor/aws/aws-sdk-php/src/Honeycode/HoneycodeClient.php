<?php
namespace Aws\Honeycode;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Honeycode** service.
 * @method Result batchCreateTableRows(array $args = [])
 * @method Promise batchCreateTableRowsAsync(array $args = [])
 * @method Result batchDeleteTableRows(array $args = [])
 * @method Promise batchDeleteTableRowsAsync(array $args = [])
 * @method Result batchUpdateTableRows(array $args = [])
 * @method Promise batchUpdateTableRowsAsync(array $args = [])
 * @method Result batchUpsertTableRows(array $args = [])
 * @method Promise batchUpsertTableRowsAsync(array $args = [])
 * @method Result describeTableDataImportJob(array $args = [])
 * @method Promise describeTableDataImportJobAsync(array $args = [])
 * @method Result getScreenData(array $args = [])
 * @method Promise getScreenDataAsync(array $args = [])
 * @method Result invokeScreenAutomation(array $args = [])
 * @method Promise invokeScreenAutomationAsync(array $args = [])
 * @method Result listTableColumns(array $args = [])
 * @method Promise listTableColumnsAsync(array $args = [])
 * @method Result listTableRows(array $args = [])
 * @method Promise listTableRowsAsync(array $args = [])
 * @method Result listTables(array $args = [])
 * @method Promise listTablesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result queryTableRows(array $args = [])
 * @method Promise queryTableRowsAsync(array $args = [])
 * @method Result startTableDataImportJob(array $args = [])
 * @method Promise startTableDataImportJobAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class HoneycodeClient extends AwsClient {}
