<?php
namespace Aws\Keyspaces;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Keyspaces** service.
 * @method Result createKeyspace(array $args = [])
 * @method Promise createKeyspaceAsync(array $args = [])
 * @method Result createTable(array $args = [])
 * @method Promise createTableAsync(array $args = [])
 * @method Result deleteKeyspace(array $args = [])
 * @method Promise deleteKeyspaceAsync(array $args = [])
 * @method Result deleteTable(array $args = [])
 * @method Promise deleteTableAsync(array $args = [])
 * @method Result getKeyspace(array $args = [])
 * @method Promise getKeyspaceAsync(array $args = [])
 * @method Result getTable(array $args = [])
 * @method Promise getTableAsync(array $args = [])
 * @method Result getTableAutoScalingSettings(array $args = [])
 * @method Promise getTableAutoScalingSettingsAsync(array $args = [])
 * @method Result listKeyspaces(array $args = [])
 * @method Promise listKeyspacesAsync(array $args = [])
 * @method Result listTables(array $args = [])
 * @method Promise listTablesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result restoreTable(array $args = [])
 * @method Promise restoreTableAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateTable(array $args = [])
 * @method Promise updateTableAsync(array $args = [])
 */
class KeyspacesClient extends AwsClient {}
