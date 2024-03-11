<?php
namespace Aws\DynamoDb;

use Aws\Api\Parser\Crc32ValidatingParser;
use Aws\AwsClient;
use Aws\ClientResolver;
use Aws\Exception\AwsException;
use Aws\HandlerList;
use Aws\Middleware;
use Aws\Result;
use Aws\Retry\ConfigurationProvider;
use Aws\RetryMiddleware;
use Aws\RetryMiddlewareV2;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon DynamoDB** service.
 *
 * @method Result batchGetItem(array $args = [])
 * @method Promise batchGetItemAsync(array $args = [])
 * @method Result batchWriteItem(array $args = [])
 * @method Promise batchWriteItemAsync(array $args = [])
 * @method Result createTable(array $args = [])
 * @method Promise createTableAsync(array $args = [])
 * @method Result deleteItem(array $args = [])
 * @method Promise deleteItemAsync(array $args = [])
 * @method Result deleteTable(array $args = [])
 * @method Promise deleteTableAsync(array $args = [])
 * @method Result describeTable(array $args = [])
 * @method Promise describeTableAsync(array $args = [])
 * @method Result getItem(array $args = [])
 * @method Promise getItemAsync(array $args = [])
 * @method Result listTables(array $args = [])
 * @method Promise listTablesAsync(array $args = [])
 * @method Result putItem(array $args = [])
 * @method Promise putItemAsync(array $args = [])
 * @method Result query(array $args = [])
 * @method Promise queryAsync(array $args = [])
 * @method Result scan(array $args = [])
 * @method Promise scanAsync(array $args = [])
 * @method Result updateItem(array $args = [])
 * @method Promise updateItemAsync(array $args = [])
 * @method Result updateTable(array $args = [])
 * @method Promise updateTableAsync(array $args = [])
 * @method Result batchExecuteStatement(array $args = []) (supported in versions 2012-08-10)
 * @method Promise batchExecuteStatementAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result createBackup(array $args = []) (supported in versions 2012-08-10)
 * @method Promise createBackupAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result createGlobalTable(array $args = []) (supported in versions 2012-08-10)
 * @method Promise createGlobalTableAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result deleteBackup(array $args = []) (supported in versions 2012-08-10)
 * @method Promise deleteBackupAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeBackup(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeBackupAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeContinuousBackups(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeContinuousBackupsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeContributorInsights(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeContributorInsightsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeEndpoints(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeEndpointsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeExport(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeExportAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeGlobalTable(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeGlobalTableAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeGlobalTableSettings(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeGlobalTableSettingsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeImport(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeImportAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeKinesisStreamingDestination(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeKinesisStreamingDestinationAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeLimits(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeLimitsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeTableReplicaAutoScaling(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeTableReplicaAutoScalingAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result describeTimeToLive(array $args = []) (supported in versions 2012-08-10)
 * @method Promise describeTimeToLiveAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result disableKinesisStreamingDestination(array $args = []) (supported in versions 2012-08-10)
 * @method Promise disableKinesisStreamingDestinationAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result enableKinesisStreamingDestination(array $args = []) (supported in versions 2012-08-10)
 * @method Promise enableKinesisStreamingDestinationAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result executeStatement(array $args = []) (supported in versions 2012-08-10)
 * @method Promise executeStatementAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result executeTransaction(array $args = []) (supported in versions 2012-08-10)
 * @method Promise executeTransactionAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result exportTableToPointInTime(array $args = []) (supported in versions 2012-08-10)
 * @method Promise exportTableToPointInTimeAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result importTable(array $args = []) (supported in versions 2012-08-10)
 * @method Promise importTableAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result listBackups(array $args = []) (supported in versions 2012-08-10)
 * @method Promise listBackupsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result listContributorInsights(array $args = []) (supported in versions 2012-08-10)
 * @method Promise listContributorInsightsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result listExports(array $args = []) (supported in versions 2012-08-10)
 * @method Promise listExportsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result listGlobalTables(array $args = []) (supported in versions 2012-08-10)
 * @method Promise listGlobalTablesAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result listImports(array $args = []) (supported in versions 2012-08-10)
 * @method Promise listImportsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result listTagsOfResource(array $args = []) (supported in versions 2012-08-10)
 * @method Promise listTagsOfResourceAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result restoreTableFromBackup(array $args = []) (supported in versions 2012-08-10)
 * @method Promise restoreTableFromBackupAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result restoreTableToPointInTime(array $args = []) (supported in versions 2012-08-10)
 * @method Promise restoreTableToPointInTimeAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result tagResource(array $args = []) (supported in versions 2012-08-10)
 * @method Promise tagResourceAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result transactGetItems(array $args = []) (supported in versions 2012-08-10)
 * @method Promise transactGetItemsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result transactWriteItems(array $args = []) (supported in versions 2012-08-10)
 * @method Promise transactWriteItemsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result untagResource(array $args = []) (supported in versions 2012-08-10)
 * @method Promise untagResourceAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result updateContinuousBackups(array $args = []) (supported in versions 2012-08-10)
 * @method Promise updateContinuousBackupsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result updateContributorInsights(array $args = []) (supported in versions 2012-08-10)
 * @method Promise updateContributorInsightsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result updateGlobalTable(array $args = []) (supported in versions 2012-08-10)
 * @method Promise updateGlobalTableAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result updateGlobalTableSettings(array $args = []) (supported in versions 2012-08-10)
 * @method Promise updateGlobalTableSettingsAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result updateKinesisStreamingDestination(array $args = []) (supported in versions 2012-08-10)
 * @method Promise updateKinesisStreamingDestinationAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result updateTableReplicaAutoScaling(array $args = []) (supported in versions 2012-08-10)
 * @method Promise updateTableReplicaAutoScalingAsync(array $args = []) (supported in versions 2012-08-10)
 * @method Result updateTimeToLive(array $args = []) (supported in versions 2012-08-10)
 * @method Promise updateTimeToLiveAsync(array $args = []) (supported in versions 2012-08-10)
 */
class DynamoDbClient extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        $args['retries']['default'] = 10;
        $args['retries']['fn'] = [__CLASS__, '_applyRetryConfig'];
        $args['api_provider']['fn'] = [__CLASS__, '_applyApiProvider'];

        return $args;
    }

    /**
     * Convenience method for instantiating and registering the DynamoDB
     * Session handler with this DynamoDB client object.
     *
     * @param array $config Array of options for the session handler factory
     *
     * @return SessionHandler
     */
    public function registerSessionHandler(array $config = [])
    {
        $handler = SessionHandler::fromClient($this, $config);
        $handler->register();

        return $handler;
    }

    /** @internal */
    public static function _applyRetryConfig($value, array &$args, HandlerList $list)
    {
        if ($value) {
            $config = ConfigurationProvider::unwrap($value);

            if ($config->getMode() === 'legacy') {
                $list->appendSign(
                    Middleware::retry(
                        RetryMiddleware::createDefaultDecider(
                            $config->getMaxAttempts() - 1,
                            ['error_codes' => ['TransactionInProgressException']]
                        ),
                        function ($retries) {
                            return $retries
                                ? RetryMiddleware::exponentialDelay($retries) / 2
                                : 0;
                        },
                        isset($args['stats']['retries'])
                            ? (bool)$args['stats']['retries']
                            : false
                    ),
                    'retry'
                );
            } else {
                $list->appendSign(
                    RetryMiddlewareV2::wrap(
                        $config,
                        [
                            'collect_stats' => $args['stats']['retries'],
                            'transient_error_codes' => ['TransactionInProgressException']
                        ]
                    ),
                    'retry'
                );
            }
        }
    }

    /** @internal */
    public static function _applyApiProvider($value, array &$args, HandlerList $list)
    {
        ClientResolver::_apply_api_provider($value, $args);
        $args['parser'] = new Crc32ValidatingParser($args['parser']);
    }
}
