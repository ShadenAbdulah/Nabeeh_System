<?php
namespace Aws\EBS;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Elastic Block Store** service.
 * @method Result completeSnapshot(array $args = [])
 * @method Promise completeSnapshotAsync(array $args = [])
 * @method Result getSnapshotBlock(array $args = [])
 * @method Promise getSnapshotBlockAsync(array $args = [])
 * @method Result listChangedBlocks(array $args = [])
 * @method Promise listChangedBlocksAsync(array $args = [])
 * @method Result listSnapshotBlocks(array $args = [])
 * @method Promise listSnapshotBlocksAsync(array $args = [])
 * @method Result putSnapshotBlock(array $args = [])
 * @method Promise putSnapshotBlockAsync(array $args = [])
 * @method Result startSnapshot(array $args = [])
 * @method Promise startSnapshotAsync(array $args = [])
 */
class EBSClient extends AwsClient {}
