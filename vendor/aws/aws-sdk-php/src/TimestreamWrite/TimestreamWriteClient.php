<?php
namespace Aws\TimestreamWrite;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Timestream Write** service.
 * @method Result createBatchLoadTask(array $args = [])
 * @method Promise createBatchLoadTaskAsync(array $args = [])
 * @method Result createDatabase(array $args = [])
 * @method Promise createDatabaseAsync(array $args = [])
 * @method Result createTable(array $args = [])
 * @method Promise createTableAsync(array $args = [])
 * @method Result deleteDatabase(array $args = [])
 * @method Promise deleteDatabaseAsync(array $args = [])
 * @method Result deleteTable(array $args = [])
 * @method Promise deleteTableAsync(array $args = [])
 * @method Result describeBatchLoadTask(array $args = [])
 * @method Promise describeBatchLoadTaskAsync(array $args = [])
 * @method Result describeDatabase(array $args = [])
 * @method Promise describeDatabaseAsync(array $args = [])
 * @method Result describeEndpoints(array $args = [])
 * @method Promise describeEndpointsAsync(array $args = [])
 * @method Result describeTable(array $args = [])
 * @method Promise describeTableAsync(array $args = [])
 * @method Result listBatchLoadTasks(array $args = [])
 * @method Promise listBatchLoadTasksAsync(array $args = [])
 * @method Result listDatabases(array $args = [])
 * @method Promise listDatabasesAsync(array $args = [])
 * @method Result listTables(array $args = [])
 * @method Promise listTablesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result resumeBatchLoadTask(array $args = [])
 * @method Promise resumeBatchLoadTaskAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateDatabase(array $args = [])
 * @method Promise updateDatabaseAsync(array $args = [])
 * @method Result updateTable(array $args = [])
 * @method Promise updateTableAsync(array $args = [])
 * @method Result writeRecords(array $args = [])
 * @method Promise writeRecordsAsync(array $args = [])
 */
class TimestreamWriteClient extends AwsClient {}
