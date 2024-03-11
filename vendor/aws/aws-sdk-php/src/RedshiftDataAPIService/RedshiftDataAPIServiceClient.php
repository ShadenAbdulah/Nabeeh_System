<?php
namespace Aws\RedshiftDataAPIService;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Redshift Data API Service** service.
 * @method Result batchExecuteStatement(array $args = [])
 * @method Promise batchExecuteStatementAsync(array $args = [])
 * @method Result cancelStatement(array $args = [])
 * @method Promise cancelStatementAsync(array $args = [])
 * @method Result describeStatement(array $args = [])
 * @method Promise describeStatementAsync(array $args = [])
 * @method Result describeTable(array $args = [])
 * @method Promise describeTableAsync(array $args = [])
 * @method Result executeStatement(array $args = [])
 * @method Promise executeStatementAsync(array $args = [])
 * @method Result getStatementResult(array $args = [])
 * @method Promise getStatementResultAsync(array $args = [])
 * @method Result listDatabases(array $args = [])
 * @method Promise listDatabasesAsync(array $args = [])
 * @method Result listSchemas(array $args = [])
 * @method Promise listSchemasAsync(array $args = [])
 * @method Result listStatements(array $args = [])
 * @method Promise listStatementsAsync(array $args = [])
 * @method Result listTables(array $args = [])
 * @method Promise listTablesAsync(array $args = [])
 */
class RedshiftDataAPIServiceClient extends AwsClient {}
