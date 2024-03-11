<?php
namespace Aws\RDSDataService;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS RDS DataService** service.
 * @method Result batchExecuteStatement(array $args = [])
 * @method Promise batchExecuteStatementAsync(array $args = [])
 * @method Result beginTransaction(array $args = [])
 * @method Promise beginTransactionAsync(array $args = [])
 * @method Result commitTransaction(array $args = [])
 * @method Promise commitTransactionAsync(array $args = [])
 * @method Result executeSql(array $args = [])
 * @method Promise executeSqlAsync(array $args = [])
 * @method Result executeStatement(array $args = [])
 * @method Promise executeStatementAsync(array $args = [])
 * @method Result rollbackTransaction(array $args = [])
 * @method Promise rollbackTransactionAsync(array $args = [])
 */
class RDSDataServiceClient extends AwsClient {}
