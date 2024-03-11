<?php
namespace Aws\Rds;

use Aws\AwsClient;
use Aws\Api\Service;
use Aws\Api\DocModel;
use Aws\Api\ApiProvider;
use Aws\PresignUrlMiddleware;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Relational Database Service (Amazon RDS)**.
 *
 * @method Result addSourceIdentifierToSubscription(array $args = [])
 * @method Promise addSourceIdentifierToSubscriptionAsync(array $args = [])
 * @method Result addTagsToResource(array $args = [])
 * @method Promise addTagsToResourceAsync(array $args = [])
 * @method Result authorizeDBSecurityGroupIngress(array $args = [])
 * @method Promise authorizeDBSecurityGroupIngressAsync(array $args = [])
 * @method Result copyDBParameterGroup(array $args = [])
 * @method Promise copyDBParameterGroupAsync(array $args = [])
 * @method Result copyDBSnapshot(array $args = [])
 * @method Promise copyDBSnapshotAsync(array $args = [])
 * @method Result copyOptionGroup(array $args = [])
 * @method Promise copyOptionGroupAsync(array $args = [])
 * @method Result createDBInstance(array $args = [])
 * @method Promise createDBInstanceAsync(array $args = [])
 * @method Result createDBInstanceReadReplica(array $args = [])
 * @method Promise createDBInstanceReadReplicaAsync(array $args = [])
 * @method Result createDBParameterGroup(array $args = [])
 * @method Promise createDBParameterGroupAsync(array $args = [])
 * @method Result createDBSecurityGroup(array $args = [])
 * @method Promise createDBSecurityGroupAsync(array $args = [])
 * @method Result createDBSnapshot(array $args = [])
 * @method Promise createDBSnapshotAsync(array $args = [])
 * @method Result createDBSubnetGroup(array $args = [])
 * @method Promise createDBSubnetGroupAsync(array $args = [])
 * @method Result createEventSubscription(array $args = [])
 * @method Promise createEventSubscriptionAsync(array $args = [])
 * @method Result createOptionGroup(array $args = [])
 * @method Promise createOptionGroupAsync(array $args = [])
 * @method Result deleteDBInstance(array $args = [])
 * @method Promise deleteDBInstanceAsync(array $args = [])
 * @method Result deleteDBParameterGroup(array $args = [])
 * @method Promise deleteDBParameterGroupAsync(array $args = [])
 * @method Result deleteDBSecurityGroup(array $args = [])
 * @method Promise deleteDBSecurityGroupAsync(array $args = [])
 * @method Result deleteDBSnapshot(array $args = [])
 * @method Promise deleteDBSnapshotAsync(array $args = [])
 * @method Result deleteDBSubnetGroup(array $args = [])
 * @method Promise deleteDBSubnetGroupAsync(array $args = [])
 * @method Result deleteEventSubscription(array $args = [])
 * @method Promise deleteEventSubscriptionAsync(array $args = [])
 * @method Result deleteOptionGroup(array $args = [])
 * @method Promise deleteOptionGroupAsync(array $args = [])
 * @method Result describeDBEngineVersions(array $args = [])
 * @method Promise describeDBEngineVersionsAsync(array $args = [])
 * @method Result describeDBInstances(array $args = [])
 * @method Promise describeDBInstancesAsync(array $args = [])
 * @method Result describeDBLogFiles(array $args = [])
 * @method Promise describeDBLogFilesAsync(array $args = [])
 * @method Result describeDBParameterGroups(array $args = [])
 * @method Promise describeDBParameterGroupsAsync(array $args = [])
 * @method Result describeDBParameters(array $args = [])
 * @method Promise describeDBParametersAsync(array $args = [])
 * @method Result describeDBSecurityGroups(array $args = [])
 * @method Promise describeDBSecurityGroupsAsync(array $args = [])
 * @method Result describeDBSnapshots(array $args = [])
 * @method Promise describeDBSnapshotsAsync(array $args = [])
 * @method Result describeDBSubnetGroups(array $args = [])
 * @method Promise describeDBSubnetGroupsAsync(array $args = [])
 * @method Result describeEngineDefaultParameters(array $args = [])
 * @method Promise describeEngineDefaultParametersAsync(array $args = [])
 * @method Result describeEventCategories(array $args = [])
 * @method Promise describeEventCategoriesAsync(array $args = [])
 * @method Result describeEventSubscriptions(array $args = [])
 * @method Promise describeEventSubscriptionsAsync(array $args = [])
 * @method Result describeEvents(array $args = [])
 * @method Promise describeEventsAsync(array $args = [])
 * @method Result describeOptionGroupOptions(array $args = [])
 * @method Promise describeOptionGroupOptionsAsync(array $args = [])
 * @method Result describeOptionGroups(array $args = [])
 * @method Promise describeOptionGroupsAsync(array $args = [])
 * @method Result describeOrderableDBInstanceOptions(array $args = [])
 * @method Promise describeOrderableDBInstanceOptionsAsync(array $args = [])
 * @method Result describeReservedDBInstances(array $args = [])
 * @method Promise describeReservedDBInstancesAsync(array $args = [])
 * @method Result describeReservedDBInstancesOfferings(array $args = [])
 * @method Promise describeReservedDBInstancesOfferingsAsync(array $args = [])
 * @method Result downloadDBLogFilePortion(array $args = [])
 * @method Promise downloadDBLogFilePortionAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result modifyDBInstance(array $args = [])
 * @method Promise modifyDBInstanceAsync(array $args = [])
 * @method Result modifyDBParameterGroup(array $args = [])
 * @method Promise modifyDBParameterGroupAsync(array $args = [])
 * @method Result modifyDBSubnetGroup(array $args = [])
 * @method Promise modifyDBSubnetGroupAsync(array $args = [])
 * @method Result modifyEventSubscription(array $args = [])
 * @method Promise modifyEventSubscriptionAsync(array $args = [])
 * @method Result modifyOptionGroup(array $args = [])
 * @method Promise modifyOptionGroupAsync(array $args = [])
 * @method Result promoteReadReplica(array $args = [])
 * @method Promise promoteReadReplicaAsync(array $args = [])
 * @method Result purchaseReservedDBInstancesOffering(array $args = [])
 * @method Promise purchaseReservedDBInstancesOfferingAsync(array $args = [])
 * @method Result rebootDBInstance(array $args = [])
 * @method Promise rebootDBInstanceAsync(array $args = [])
 * @method Result removeSourceIdentifierFromSubscription(array $args = [])
 * @method Promise removeSourceIdentifierFromSubscriptionAsync(array $args = [])
 * @method Result removeTagsFromResource(array $args = [])
 * @method Promise removeTagsFromResourceAsync(array $args = [])
 * @method Result resetDBParameterGroup(array $args = [])
 * @method Promise resetDBParameterGroupAsync(array $args = [])
 * @method Result restoreDBInstanceFromDBSnapshot(array $args = [])
 * @method Promise restoreDBInstanceFromDBSnapshotAsync(array $args = [])
 * @method Result restoreDBInstanceToPointInTime(array $args = [])
 * @method Promise restoreDBInstanceToPointInTimeAsync(array $args = [])
 * @method Result revokeDBSecurityGroupIngress(array $args = [])
 * @method Promise revokeDBSecurityGroupIngressAsync(array $args = [])
 * @method Result addRoleToDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise addRoleToDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result addRoleToDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method Promise addRoleToDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result applyPendingMaintenanceAction(array $args = []) (supported in versions 2014-10-31)
 * @method Promise applyPendingMaintenanceActionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result backtrackDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise backtrackDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result cancelExportTask(array $args = []) (supported in versions 2014-10-31)
 * @method Promise cancelExportTaskAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result copyDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise copyDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result copyDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method Promise copyDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createBlueGreenDeployment(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createBlueGreenDeploymentAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createCustomDBEngineVersion(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createCustomDBEngineVersionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createDBClusterEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createDBClusterEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createDBProxy(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createDBProxyAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createDBProxyEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createDBProxyEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createDBShardGroup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createDBShardGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createIntegration(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createIntegrationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result createTenantDatabase(array $args = []) (supported in versions 2014-10-31)
 * @method Promise createTenantDatabaseAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteBlueGreenDeployment(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteBlueGreenDeploymentAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteCustomDBEngineVersion(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteCustomDBEngineVersionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteDBClusterAutomatedBackup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteDBClusterAutomatedBackupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteDBClusterEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteDBClusterEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteDBClusterSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteDBClusterSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteDBInstanceAutomatedBackup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteDBInstanceAutomatedBackupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteDBProxy(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteDBProxyAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteDBProxyEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteDBProxyEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteDBShardGroup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteDBShardGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteIntegration(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteIntegrationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deleteTenantDatabase(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deleteTenantDatabaseAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result deregisterDBProxyTargets(array $args = []) (supported in versions 2014-10-31)
 * @method Promise deregisterDBProxyTargetsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeAccountAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeAccountAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeBlueGreenDeployments(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeBlueGreenDeploymentsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeCertificates(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeCertificatesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBClusterAutomatedBackups(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBClusterAutomatedBackupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBClusterBacktracks(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBClusterBacktracksAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBClusterEndpoints(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBClusterEndpointsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBClusterParameterGroups(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBClusterParameterGroupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBClusterParameters(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBClusterParametersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBClusterSnapshotAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBClusterSnapshotAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBClusterSnapshots(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBClusterSnapshotsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBClusters(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBClustersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBInstanceAutomatedBackups(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBInstanceAutomatedBackupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBProxies(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBProxiesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBProxyEndpoints(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBProxyEndpointsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBProxyTargetGroups(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBProxyTargetGroupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBProxyTargets(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBProxyTargetsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBRecommendations(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBRecommendationsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBShardGroups(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBShardGroupsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBSnapshotAttributes(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBSnapshotAttributesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeDBSnapshotTenantDatabases(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeDBSnapshotTenantDatabasesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeEngineDefaultClusterParameters(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeEngineDefaultClusterParametersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeExportTasks(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeExportTasksAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeGlobalClusters(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeGlobalClustersAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeIntegrations(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeIntegrationsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describePendingMaintenanceActions(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describePendingMaintenanceActionsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeSourceRegions(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeSourceRegionsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeTenantDatabases(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeTenantDatabasesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result describeValidDBInstanceModifications(array $args = []) (supported in versions 2014-10-31)
 * @method Promise describeValidDBInstanceModificationsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result disableHttpEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method Promise disableHttpEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result enableHttpEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method Promise enableHttpEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result failoverDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise failoverDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result failoverGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise failoverGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyActivityStream(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyActivityStreamAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyCertificates(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyCertificatesAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyCurrentDBClusterCapacity(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyCurrentDBClusterCapacityAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyCustomDBEngineVersion(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyCustomDBEngineVersionAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyDBClusterEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyDBClusterEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyDBClusterSnapshotAttribute(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyDBClusterSnapshotAttributeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyDBProxy(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyDBProxyAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyDBProxyEndpoint(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyDBProxyEndpointAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyDBProxyTargetGroup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyDBProxyTargetGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyDBRecommendation(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyDBRecommendationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyDBShardGroup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyDBShardGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyDBSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyDBSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyDBSnapshotAttribute(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyDBSnapshotAttributeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result modifyTenantDatabase(array $args = []) (supported in versions 2014-10-31)
 * @method Promise modifyTenantDatabaseAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result promoteReadReplicaDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise promoteReadReplicaDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result rebootDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise rebootDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result rebootDBShardGroup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise rebootDBShardGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result registerDBProxyTargets(array $args = []) (supported in versions 2014-10-31)
 * @method Promise registerDBProxyTargetsAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result removeFromGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise removeFromGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result removeRoleFromDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise removeRoleFromDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result removeRoleFromDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method Promise removeRoleFromDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result resetDBClusterParameterGroup(array $args = []) (supported in versions 2014-10-31)
 * @method Promise resetDBClusterParameterGroupAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result restoreDBClusterFromS3(array $args = []) (supported in versions 2014-10-31)
 * @method Promise restoreDBClusterFromS3Async(array $args = []) (supported in versions 2014-10-31)
 * @method Result restoreDBClusterFromSnapshot(array $args = []) (supported in versions 2014-10-31)
 * @method Promise restoreDBClusterFromSnapshotAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result restoreDBClusterToPointInTime(array $args = []) (supported in versions 2014-10-31)
 * @method Promise restoreDBClusterToPointInTimeAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result restoreDBInstanceFromS3(array $args = []) (supported in versions 2014-10-31)
 * @method Promise restoreDBInstanceFromS3Async(array $args = []) (supported in versions 2014-10-31)
 * @method Result startActivityStream(array $args = []) (supported in versions 2014-10-31)
 * @method Promise startActivityStreamAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result startDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise startDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result startDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method Promise startDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result startDBInstanceAutomatedBackupsReplication(array $args = []) (supported in versions 2014-10-31)
 * @method Promise startDBInstanceAutomatedBackupsReplicationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result startExportTask(array $args = []) (supported in versions 2014-10-31)
 * @method Promise startExportTaskAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result stopActivityStream(array $args = []) (supported in versions 2014-10-31)
 * @method Promise stopActivityStreamAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result stopDBCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise stopDBClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result stopDBInstance(array $args = []) (supported in versions 2014-10-31)
 * @method Promise stopDBInstanceAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result stopDBInstanceAutomatedBackupsReplication(array $args = []) (supported in versions 2014-10-31)
 * @method Promise stopDBInstanceAutomatedBackupsReplicationAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result switchoverBlueGreenDeployment(array $args = []) (supported in versions 2014-10-31)
 * @method Promise switchoverBlueGreenDeploymentAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result switchoverGlobalCluster(array $args = []) (supported in versions 2014-10-31)
 * @method Promise switchoverGlobalClusterAsync(array $args = []) (supported in versions 2014-10-31)
 * @method Result switchoverReadReplica(array $args = []) (supported in versions 2014-10-31)
 * @method Promise switchoverReadReplicaAsync(array $args = []) (supported in versions 2014-10-31)
 */
class RdsClient extends AwsClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                            'CopyDBSnapshot',
                            'CreateDBInstanceReadReplica',
                            'CopyDBClusterSnapshot',
                            'CreateDBCluster',
                            'StartDBInstanceAutomatedBackupsReplication'
                        ],
                        'service' => 'rds',
                        'presign_param' => 'PreSignedUrl',
                        'require_different_region' => true,
                    ]
                ),
                'rds.presigner'
            );
        };

        parent::__construct($args);
    }

    /**
     * @internal
     * @codeCoverageIgnore
     */
    public static function applyDocFilters(array $api, array $docs)
    {
        // Add the SourceRegion parameter
        $docs['shapes']['SourceRegion']['base'] = 'A required parameter that indicates '
            . 'the region that the DB snapshot will be copied from.';
        $api['shapes']['SourceRegion'] = ['type' => 'string'];
        $api['shapes']['CopyDBSnapshotMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];
        $api['shapes']['CreateDBInstanceReadReplicaMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];

        // Add the DestinationRegion parameter
        $docs['shapes']['DestinationRegion']['base']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';
        $api['shapes']['DestinationRegion'] = ['type' => 'string'];
        $api['shapes']['CopyDBSnapshotMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];
        $api['shapes']['CreateDBInstanceReadReplicaMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];

        // Several parameters in presign APIs are optional.
        $docs['shapes']['String']['refs']['CopyDBSnapshotMessage$PreSignedUrl']
            = '<div class="alert alert-info">The SDK will compute this value '
            . 'for you on your behalf.</div>';
        $docs['shapes']['String']['refs']['CopyDBSnapshotMessage$DestinationRegion']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';

        // Several parameters in presign APIs are optional.
        $docs['shapes']['String']['refs']['CreateDBInstanceReadReplicaMessage$PreSignedUrl']
            = '<div class="alert alert-info">The SDK will compute this value '
            . 'for you on your behalf.</div>';
        $docs['shapes']['String']['refs']['CreateDBInstanceReadReplicaMessage$DestinationRegion']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';

        if ($api['metadata']['apiVersion'] != '2014-09-01') {
            $api['shapes']['CopyDBClusterSnapshotMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];
            $api['shapes']['CreateDBClusterMessage']['members']['SourceRegion'] = ['shape' => 'SourceRegion'];

            $api['shapes']['CopyDBClusterSnapshotMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];
            $api['shapes']['CreateDBClusterMessage']['members']['DestinationRegion'] = ['shape' => 'DestinationRegion'];

            // Several parameters in presign APIs are optional.
            $docs['shapes']['String']['refs']['CopyDBClusterSnapshotMessage$PreSignedUrl']
                = '<div class="alert alert-info">The SDK will compute this value '
                . 'for you on your behalf.</div>';
            $docs['shapes']['String']['refs']['CopyDBClusterSnapshotMessage$DestinationRegion']
                = '<div class="alert alert-info">The SDK will populate this '
                . 'parameter on your behalf using the configured region value of '
                . 'the client.</div>';

            // Several parameters in presign APIs are optional.
            $docs['shapes']['String']['refs']['CreateDBClusterMessage$PreSignedUrl']
                = '<div class="alert alert-info">The SDK will compute this value '
                . 'for you on your behalf.</div>';
            $docs['shapes']['String']['refs']['CreateDBClusterMessage$DestinationRegion']
                = '<div class="alert alert-info">The SDK will populate this '
                . 'parameter on your behalf using the configured region value of '
                . 'the client.</div>';
        }

        return [
            new Service($api, ApiProvider::defaultProvider()),
            new DocModel($docs)
        ];
    }
}
