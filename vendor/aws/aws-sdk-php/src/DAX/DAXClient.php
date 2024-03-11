<?php
namespace Aws\DAX;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon DynamoDB Accelerator (DAX)** service.
 * @method Result createCluster(array $args = [])
 * @method Promise createClusterAsync(array $args = [])
 * @method Result createParameterGroup(array $args = [])
 * @method Promise createParameterGroupAsync(array $args = [])
 * @method Result createSubnetGroup(array $args = [])
 * @method Promise createSubnetGroupAsync(array $args = [])
 * @method Result decreaseReplicationFactor(array $args = [])
 * @method Promise decreaseReplicationFactorAsync(array $args = [])
 * @method Result deleteCluster(array $args = [])
 * @method Promise deleteClusterAsync(array $args = [])
 * @method Result deleteParameterGroup(array $args = [])
 * @method Promise deleteParameterGroupAsync(array $args = [])
 * @method Result deleteSubnetGroup(array $args = [])
 * @method Promise deleteSubnetGroupAsync(array $args = [])
 * @method Result describeClusters(array $args = [])
 * @method Promise describeClustersAsync(array $args = [])
 * @method Result describeDefaultParameters(array $args = [])
 * @method Promise describeDefaultParametersAsync(array $args = [])
 * @method Result describeEvents(array $args = [])
 * @method Promise describeEventsAsync(array $args = [])
 * @method Result describeParameterGroups(array $args = [])
 * @method Promise describeParameterGroupsAsync(array $args = [])
 * @method Result describeParameters(array $args = [])
 * @method Promise describeParametersAsync(array $args = [])
 * @method Result describeSubnetGroups(array $args = [])
 * @method Promise describeSubnetGroupsAsync(array $args = [])
 * @method Result increaseReplicationFactor(array $args = [])
 * @method Promise increaseReplicationFactorAsync(array $args = [])
 * @method Result listTags(array $args = [])
 * @method Promise listTagsAsync(array $args = [])
 * @method Result rebootNode(array $args = [])
 * @method Promise rebootNodeAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateCluster(array $args = [])
 * @method Promise updateClusterAsync(array $args = [])
 * @method Result updateParameterGroup(array $args = [])
 * @method Promise updateParameterGroupAsync(array $args = [])
 * @method Result updateSubnetGroup(array $args = [])
 * @method Promise updateSubnetGroupAsync(array $args = [])
 */
class DAXClient extends AwsClient {}
