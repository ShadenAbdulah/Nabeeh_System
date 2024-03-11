<?php
namespace Aws\MediaPackageVod;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Elemental MediaPackage VOD** service.
 * @method Result configureLogs(array $args = [])
 * @method Promise configureLogsAsync(array $args = [])
 * @method Result createAsset(array $args = [])
 * @method Promise createAssetAsync(array $args = [])
 * @method Result createPackagingConfiguration(array $args = [])
 * @method Promise createPackagingConfigurationAsync(array $args = [])
 * @method Result createPackagingGroup(array $args = [])
 * @method Promise createPackagingGroupAsync(array $args = [])
 * @method Result deleteAsset(array $args = [])
 * @method Promise deleteAssetAsync(array $args = [])
 * @method Result deletePackagingConfiguration(array $args = [])
 * @method Promise deletePackagingConfigurationAsync(array $args = [])
 * @method Result deletePackagingGroup(array $args = [])
 * @method Promise deletePackagingGroupAsync(array $args = [])
 * @method Result describeAsset(array $args = [])
 * @method Promise describeAssetAsync(array $args = [])
 * @method Result describePackagingConfiguration(array $args = [])
 * @method Promise describePackagingConfigurationAsync(array $args = [])
 * @method Result describePackagingGroup(array $args = [])
 * @method Promise describePackagingGroupAsync(array $args = [])
 * @method Result listAssets(array $args = [])
 * @method Promise listAssetsAsync(array $args = [])
 * @method Result listPackagingConfigurations(array $args = [])
 * @method Promise listPackagingConfigurationsAsync(array $args = [])
 * @method Result listPackagingGroups(array $args = [])
 * @method Promise listPackagingGroupsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updatePackagingGroup(array $args = [])
 * @method Promise updatePackagingGroupAsync(array $args = [])
 */
class MediaPackageVodClient extends AwsClient {}
