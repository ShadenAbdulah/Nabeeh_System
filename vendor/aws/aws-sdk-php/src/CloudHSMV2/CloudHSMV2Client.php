<?php
namespace Aws\CloudHSMV2;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS CloudHSM V2** service.
 * @method Result copyBackupToRegion(array $args = [])
 * @method Promise copyBackupToRegionAsync(array $args = [])
 * @method Result createCluster(array $args = [])
 * @method Promise createClusterAsync(array $args = [])
 * @method Result createHsm(array $args = [])
 * @method Promise createHsmAsync(array $args = [])
 * @method Result deleteBackup(array $args = [])
 * @method Promise deleteBackupAsync(array $args = [])
 * @method Result deleteCluster(array $args = [])
 * @method Promise deleteClusterAsync(array $args = [])
 * @method Result deleteHsm(array $args = [])
 * @method Promise deleteHsmAsync(array $args = [])
 * @method Result describeBackups(array $args = [])
 * @method Promise describeBackupsAsync(array $args = [])
 * @method Result describeClusters(array $args = [])
 * @method Promise describeClustersAsync(array $args = [])
 * @method Result initializeCluster(array $args = [])
 * @method Promise initializeClusterAsync(array $args = [])
 * @method Result listTags(array $args = [])
 * @method Promise listTagsAsync(array $args = [])
 * @method Result modifyBackupAttributes(array $args = [])
 * @method Promise modifyBackupAttributesAsync(array $args = [])
 * @method Result modifyCluster(array $args = [])
 * @method Promise modifyClusterAsync(array $args = [])
 * @method Result restoreBackup(array $args = [])
 * @method Promise restoreBackupAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class CloudHSMV2Client extends AwsClient {}
