<?php
namespace Aws\OpsWorksCM;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS OpsWorks for Chef Automate** service.
 * @method Result associateNode(array $args = [])
 * @method Promise associateNodeAsync(array $args = [])
 * @method Result createBackup(array $args = [])
 * @method Promise createBackupAsync(array $args = [])
 * @method Result createServer(array $args = [])
 * @method Promise createServerAsync(array $args = [])
 * @method Result deleteBackup(array $args = [])
 * @method Promise deleteBackupAsync(array $args = [])
 * @method Result deleteServer(array $args = [])
 * @method Promise deleteServerAsync(array $args = [])
 * @method Result describeAccountAttributes(array $args = [])
 * @method Promise describeAccountAttributesAsync(array $args = [])
 * @method Result describeBackups(array $args = [])
 * @method Promise describeBackupsAsync(array $args = [])
 * @method Result describeEvents(array $args = [])
 * @method Promise describeEventsAsync(array $args = [])
 * @method Result describeNodeAssociationStatus(array $args = [])
 * @method Promise describeNodeAssociationStatusAsync(array $args = [])
 * @method Result describeServers(array $args = [])
 * @method Promise describeServersAsync(array $args = [])
 * @method Result disassociateNode(array $args = [])
 * @method Promise disassociateNodeAsync(array $args = [])
 * @method Result exportServerEngineAttribute(array $args = [])
 * @method Promise exportServerEngineAttributeAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result restoreServer(array $args = [])
 * @method Promise restoreServerAsync(array $args = [])
 * @method Result startMaintenance(array $args = [])
 * @method Promise startMaintenanceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateServer(array $args = [])
 * @method Promise updateServerAsync(array $args = [])
 * @method Result updateServerEngineAttributes(array $args = [])
 * @method Promise updateServerEngineAttributesAsync(array $args = [])
 */
class OpsWorksCMClient extends AwsClient {}
