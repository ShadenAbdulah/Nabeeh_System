<?php
namespace Aws\SsmSap;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Systems Manager for SAP** service.
 * @method Result deleteResourcePermission(array $args = [])
 * @method Promise deleteResourcePermissionAsync(array $args = [])
 * @method Result deregisterApplication(array $args = [])
 * @method Promise deregisterApplicationAsync(array $args = [])
 * @method Result getApplication(array $args = [])
 * @method Promise getApplicationAsync(array $args = [])
 * @method Result getComponent(array $args = [])
 * @method Promise getComponentAsync(array $args = [])
 * @method Result getDatabase(array $args = [])
 * @method Promise getDatabaseAsync(array $args = [])
 * @method Result getOperation(array $args = [])
 * @method Promise getOperationAsync(array $args = [])
 * @method Result getResourcePermission(array $args = [])
 * @method Promise getResourcePermissionAsync(array $args = [])
 * @method Result listApplications(array $args = [])
 * @method Promise listApplicationsAsync(array $args = [])
 * @method Result listComponents(array $args = [])
 * @method Promise listComponentsAsync(array $args = [])
 * @method Result listDatabases(array $args = [])
 * @method Promise listDatabasesAsync(array $args = [])
 * @method Result listOperations(array $args = [])
 * @method Promise listOperationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putResourcePermission(array $args = [])
 * @method Promise putResourcePermissionAsync(array $args = [])
 * @method Result registerApplication(array $args = [])
 * @method Promise registerApplicationAsync(array $args = [])
 * @method Result startApplicationRefresh(array $args = [])
 * @method Promise startApplicationRefreshAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateApplicationSettings(array $args = [])
 * @method Promise updateApplicationSettingsAsync(array $args = [])
 */
class SsmSapClient extends AwsClient {}
