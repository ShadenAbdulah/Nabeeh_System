<?php
namespace Aws\CognitoSync;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Cognito Sync** service.
 *
 * @method Result bulkPublish(array $args = [])
 * @method Promise bulkPublishAsync(array $args = [])
 * @method Result deleteDataset(array $args = [])
 * @method Promise deleteDatasetAsync(array $args = [])
 * @method Result describeDataset(array $args = [])
 * @method Promise describeDatasetAsync(array $args = [])
 * @method Result describeIdentityPoolUsage(array $args = [])
 * @method Promise describeIdentityPoolUsageAsync(array $args = [])
 * @method Result describeIdentityUsage(array $args = [])
 * @method Promise describeIdentityUsageAsync(array $args = [])
 * @method Result getBulkPublishDetails(array $args = [])
 * @method Promise getBulkPublishDetailsAsync(array $args = [])
 * @method Result getCognitoEvents(array $args = [])
 * @method Promise getCognitoEventsAsync(array $args = [])
 * @method Result getIdentityPoolConfiguration(array $args = [])
 * @method Promise getIdentityPoolConfigurationAsync(array $args = [])
 * @method Result listDatasets(array $args = [])
 * @method Promise listDatasetsAsync(array $args = [])
 * @method Result listIdentityPoolUsage(array $args = [])
 * @method Promise listIdentityPoolUsageAsync(array $args = [])
 * @method Result listRecords(array $args = [])
 * @method Promise listRecordsAsync(array $args = [])
 * @method Result registerDevice(array $args = [])
 * @method Promise registerDeviceAsync(array $args = [])
 * @method Result setCognitoEvents(array $args = [])
 * @method Promise setCognitoEventsAsync(array $args = [])
 * @method Result setIdentityPoolConfiguration(array $args = [])
 * @method Promise setIdentityPoolConfigurationAsync(array $args = [])
 * @method Result subscribeToDataset(array $args = [])
 * @method Promise subscribeToDatasetAsync(array $args = [])
 * @method Result unsubscribeFromDataset(array $args = [])
 * @method Promise unsubscribeFromDatasetAsync(array $args = [])
 * @method Result updateRecords(array $args = [])
 * @method Promise updateRecordsAsync(array $args = [])
 */
class CognitoSyncClient extends AwsClient {}
