<?php
namespace Aws\DocDBElastic;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon DocumentDB Elastic Clusters** service.
 * @method Result copyClusterSnapshot(array $args = [])
 * @method Promise copyClusterSnapshotAsync(array $args = [])
 * @method Result createCluster(array $args = [])
 * @method Promise createClusterAsync(array $args = [])
 * @method Result createClusterSnapshot(array $args = [])
 * @method Promise createClusterSnapshotAsync(array $args = [])
 * @method Result deleteCluster(array $args = [])
 * @method Promise deleteClusterAsync(array $args = [])
 * @method Result deleteClusterSnapshot(array $args = [])
 * @method Promise deleteClusterSnapshotAsync(array $args = [])
 * @method Result getCluster(array $args = [])
 * @method Promise getClusterAsync(array $args = [])
 * @method Result getClusterSnapshot(array $args = [])
 * @method Promise getClusterSnapshotAsync(array $args = [])
 * @method Result listClusterSnapshots(array $args = [])
 * @method Promise listClusterSnapshotsAsync(array $args = [])
 * @method Result listClusters(array $args = [])
 * @method Promise listClustersAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result restoreClusterFromSnapshot(array $args = [])
 * @method Promise restoreClusterFromSnapshotAsync(array $args = [])
 * @method Result startCluster(array $args = [])
 * @method Promise startClusterAsync(array $args = [])
 * @method Result stopCluster(array $args = [])
 * @method Promise stopClusterAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateCluster(array $args = [])
 * @method Promise updateClusterAsync(array $args = [])
 */
class DocDBElasticClient extends AwsClient {}
