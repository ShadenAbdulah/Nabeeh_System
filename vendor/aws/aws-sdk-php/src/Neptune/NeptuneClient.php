<?php
namespace Aws\Neptune;

use Aws\AwsClient;
use Aws\PresignUrlMiddleware;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Neptune** service.
 * @method Result addRoleToDBCluster(array $args = [])
 * @method Promise addRoleToDBClusterAsync(array $args = [])
 * @method Result addSourceIdentifierToSubscription(array $args = [])
 * @method Promise addSourceIdentifierToSubscriptionAsync(array $args = [])
 * @method Result addTagsToResource(array $args = [])
 * @method Promise addTagsToResourceAsync(array $args = [])
 * @method Result applyPendingMaintenanceAction(array $args = [])
 * @method Promise applyPendingMaintenanceActionAsync(array $args = [])
 * @method Result copyDBClusterParameterGroup(array $args = [])
 * @method Promise copyDBClusterParameterGroupAsync(array $args = [])
 * @method Result copyDBClusterSnapshot(array $args = [])
 * @method Promise copyDBClusterSnapshotAsync(array $args = [])
 * @method Result copyDBParameterGroup(array $args = [])
 * @method Promise copyDBParameterGroupAsync(array $args = [])
 * @method Result createDBCluster(array $args = [])
 * @method Promise createDBClusterAsync(array $args = [])
 * @method Result createDBClusterEndpoint(array $args = [])
 * @method Promise createDBClusterEndpointAsync(array $args = [])
 * @method Result createDBClusterParameterGroup(array $args = [])
 * @method Promise createDBClusterParameterGroupAsync(array $args = [])
 * @method Result createDBClusterSnapshot(array $args = [])
 * @method Promise createDBClusterSnapshotAsync(array $args = [])
 * @method Result createDBInstance(array $args = [])
 * @method Promise createDBInstanceAsync(array $args = [])
 * @method Result createDBParameterGroup(array $args = [])
 * @method Promise createDBParameterGroupAsync(array $args = [])
 * @method Result createDBSubnetGroup(array $args = [])
 * @method Promise createDBSubnetGroupAsync(array $args = [])
 * @method Result createEventSubscription(array $args = [])
 * @method Promise createEventSubscriptionAsync(array $args = [])
 * @method Result createGlobalCluster(array $args = [])
 * @method Promise createGlobalClusterAsync(array $args = [])
 * @method Result deleteDBCluster(array $args = [])
 * @method Promise deleteDBClusterAsync(array $args = [])
 * @method Result deleteDBClusterEndpoint(array $args = [])
 * @method Promise deleteDBClusterEndpointAsync(array $args = [])
 * @method Result deleteDBClusterParameterGroup(array $args = [])
 * @method Promise deleteDBClusterParameterGroupAsync(array $args = [])
 * @method Result deleteDBClusterSnapshot(array $args = [])
 * @method Promise deleteDBClusterSnapshotAsync(array $args = [])
 * @method Result deleteDBInstance(array $args = [])
 * @method Promise deleteDBInstanceAsync(array $args = [])
 * @method Result deleteDBParameterGroup(array $args = [])
 * @method Promise deleteDBParameterGroupAsync(array $args = [])
 * @method Result deleteDBSubnetGroup(array $args = [])
 * @method Promise deleteDBSubnetGroupAsync(array $args = [])
 * @method Result deleteEventSubscription(array $args = [])
 * @method Promise deleteEventSubscriptionAsync(array $args = [])
 * @method Result deleteGlobalCluster(array $args = [])
 * @method Promise deleteGlobalClusterAsync(array $args = [])
 * @method Result describeDBClusterEndpoints(array $args = [])
 * @method Promise describeDBClusterEndpointsAsync(array $args = [])
 * @method Result describeDBClusterParameterGroups(array $args = [])
 * @method Promise describeDBClusterParameterGroupsAsync(array $args = [])
 * @method Result describeDBClusterParameters(array $args = [])
 * @method Promise describeDBClusterParametersAsync(array $args = [])
 * @method Result describeDBClusterSnapshotAttributes(array $args = [])
 * @method Promise describeDBClusterSnapshotAttributesAsync(array $args = [])
 * @method Result describeDBClusterSnapshots(array $args = [])
 * @method Promise describeDBClusterSnapshotsAsync(array $args = [])
 * @method Result describeDBClusters(array $args = [])
 * @method Promise describeDBClustersAsync(array $args = [])
 * @method Result describeDBEngineVersions(array $args = [])
 * @method Promise describeDBEngineVersionsAsync(array $args = [])
 * @method Result describeDBInstances(array $args = [])
 * @method Promise describeDBInstancesAsync(array $args = [])
 * @method Result describeDBParameterGroups(array $args = [])
 * @method Promise describeDBParameterGroupsAsync(array $args = [])
 * @method Result describeDBParameters(array $args = [])
 * @method Promise describeDBParametersAsync(array $args = [])
 * @method Result describeDBSubnetGroups(array $args = [])
 * @method Promise describeDBSubnetGroupsAsync(array $args = [])
 * @method Result describeEngineDefaultClusterParameters(array $args = [])
 * @method Promise describeEngineDefaultClusterParametersAsync(array $args = [])
 * @method Result describeEngineDefaultParameters(array $args = [])
 * @method Promise describeEngineDefaultParametersAsync(array $args = [])
 * @method Result describeEventCategories(array $args = [])
 * @method Promise describeEventCategoriesAsync(array $args = [])
 * @method Result describeEventSubscriptions(array $args = [])
 * @method Promise describeEventSubscriptionsAsync(array $args = [])
 * @method Result describeEvents(array $args = [])
 * @method Promise describeEventsAsync(array $args = [])
 * @method Result describeGlobalClusters(array $args = [])
 * @method Promise describeGlobalClustersAsync(array $args = [])
 * @method Result describeOrderableDBInstanceOptions(array $args = [])
 * @method Promise describeOrderableDBInstanceOptionsAsync(array $args = [])
 * @method Result describePendingMaintenanceActions(array $args = [])
 * @method Promise describePendingMaintenanceActionsAsync(array $args = [])
 * @method Result describeValidDBInstanceModifications(array $args = [])
 * @method Promise describeValidDBInstanceModificationsAsync(array $args = [])
 * @method Result failoverDBCluster(array $args = [])
 * @method Promise failoverDBClusterAsync(array $args = [])
 * @method Result failoverGlobalCluster(array $args = [])
 * @method Promise failoverGlobalClusterAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result modifyDBCluster(array $args = [])
 * @method Promise modifyDBClusterAsync(array $args = [])
 * @method Result modifyDBClusterEndpoint(array $args = [])
 * @method Promise modifyDBClusterEndpointAsync(array $args = [])
 * @method Result modifyDBClusterParameterGroup(array $args = [])
 * @method Promise modifyDBClusterParameterGroupAsync(array $args = [])
 * @method Result modifyDBClusterSnapshotAttribute(array $args = [])
 * @method Promise modifyDBClusterSnapshotAttributeAsync(array $args = [])
 * @method Result modifyDBInstance(array $args = [])
 * @method Promise modifyDBInstanceAsync(array $args = [])
 * @method Result modifyDBParameterGroup(array $args = [])
 * @method Promise modifyDBParameterGroupAsync(array $args = [])
 * @method Result modifyDBSubnetGroup(array $args = [])
 * @method Promise modifyDBSubnetGroupAsync(array $args = [])
 * @method Result modifyEventSubscription(array $args = [])
 * @method Promise modifyEventSubscriptionAsync(array $args = [])
 * @method Result modifyGlobalCluster(array $args = [])
 * @method Promise modifyGlobalClusterAsync(array $args = [])
 * @method Result promoteReadReplicaDBCluster(array $args = [])
 * @method Promise promoteReadReplicaDBClusterAsync(array $args = [])
 * @method Result rebootDBInstance(array $args = [])
 * @method Promise rebootDBInstanceAsync(array $args = [])
 * @method Result removeFromGlobalCluster(array $args = [])
 * @method Promise removeFromGlobalClusterAsync(array $args = [])
 * @method Result removeRoleFromDBCluster(array $args = [])
 * @method Promise removeRoleFromDBClusterAsync(array $args = [])
 * @method Result removeSourceIdentifierFromSubscription(array $args = [])
 * @method Promise removeSourceIdentifierFromSubscriptionAsync(array $args = [])
 * @method Result removeTagsFromResource(array $args = [])
 * @method Promise removeTagsFromResourceAsync(array $args = [])
 * @method Result resetDBClusterParameterGroup(array $args = [])
 * @method Promise resetDBClusterParameterGroupAsync(array $args = [])
 * @method Result resetDBParameterGroup(array $args = [])
 * @method Promise resetDBParameterGroupAsync(array $args = [])
 * @method Result restoreDBClusterFromSnapshot(array $args = [])
 * @method Promise restoreDBClusterFromSnapshotAsync(array $args = [])
 * @method Result restoreDBClusterToPointInTime(array $args = [])
 * @method Promise restoreDBClusterToPointInTimeAsync(array $args = [])
 * @method Result startDBCluster(array $args = [])
 * @method Promise startDBClusterAsync(array $args = [])
 * @method Result stopDBCluster(array $args = [])
 * @method Promise stopDBClusterAsync(array $args = [])
 */
class NeptuneClient extends AwsClient {
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                            'CopyDBClusterSnapshot',
                            'CreateDBCluster',
                        ],
                        'service' => 'rds',
                        'presign_param' => 'PreSignedUrl',
                        'require_different_region' => true,
                        'extra_query_params' => [
                            'CopyDBClusterSnapshot' => ['DestinationRegion'],
                            'CreateDBCluster' => ['DestinationRegion'],
                        ]
                    ]
                ),
                'rds.presigner'
            );
        };
        parent::__construct($args);
    }
}
