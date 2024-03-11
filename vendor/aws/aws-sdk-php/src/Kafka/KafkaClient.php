<?php
namespace Aws\Kafka;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Managed Streaming for Kafka** service.
 * @method Result batchAssociateScramSecret(array $args = [])
 * @method Promise batchAssociateScramSecretAsync(array $args = [])
 * @method Result createCluster(array $args = [])
 * @method Promise createClusterAsync(array $args = [])
 * @method Result createClusterV2(array $args = [])
 * @method Promise createClusterV2Async(array $args = [])
 * @method Result createConfiguration(array $args = [])
 * @method Promise createConfigurationAsync(array $args = [])
 * @method Result createReplicator(array $args = [])
 * @method Promise createReplicatorAsync(array $args = [])
 * @method Result createVpcConnection(array $args = [])
 * @method Promise createVpcConnectionAsync(array $args = [])
 * @method Result deleteCluster(array $args = [])
 * @method Promise deleteClusterAsync(array $args = [])
 * @method Result deleteConfiguration(array $args = [])
 * @method Promise deleteConfigurationAsync(array $args = [])
 * @method Result deleteReplicator(array $args = [])
 * @method Promise deleteReplicatorAsync(array $args = [])
 * @method Result deleteVpcConnection(array $args = [])
 * @method Promise deleteVpcConnectionAsync(array $args = [])
 * @method Result describeCluster(array $args = [])
 * @method Promise describeClusterAsync(array $args = [])
 * @method Result describeClusterV2(array $args = [])
 * @method Promise describeClusterV2Async(array $args = [])
 * @method Result describeClusterOperation(array $args = [])
 * @method Promise describeClusterOperationAsync(array $args = [])
 * @method Result describeClusterOperationV2(array $args = [])
 * @method Promise describeClusterOperationV2Async(array $args = [])
 * @method Result describeConfiguration(array $args = [])
 * @method Promise describeConfigurationAsync(array $args = [])
 * @method Result describeConfigurationRevision(array $args = [])
 * @method Promise describeConfigurationRevisionAsync(array $args = [])
 * @method Result describeReplicator(array $args = [])
 * @method Promise describeReplicatorAsync(array $args = [])
 * @method Result describeVpcConnection(array $args = [])
 * @method Promise describeVpcConnectionAsync(array $args = [])
 * @method Result batchDisassociateScramSecret(array $args = [])
 * @method Promise batchDisassociateScramSecretAsync(array $args = [])
 * @method Result getBootstrapBrokers(array $args = [])
 * @method Promise getBootstrapBrokersAsync(array $args = [])
 * @method Result getCompatibleKafkaVersions(array $args = [])
 * @method Promise getCompatibleKafkaVersionsAsync(array $args = [])
 * @method Result listClusterOperations(array $args = [])
 * @method Promise listClusterOperationsAsync(array $args = [])
 * @method Result listClusterOperationsV2(array $args = [])
 * @method Promise listClusterOperationsV2Async(array $args = [])
 * @method Result listClusters(array $args = [])
 * @method Promise listClustersAsync(array $args = [])
 * @method Result listClustersV2(array $args = [])
 * @method Promise listClustersV2Async(array $args = [])
 * @method Result listConfigurationRevisions(array $args = [])
 * @method Promise listConfigurationRevisionsAsync(array $args = [])
 * @method Result listConfigurations(array $args = [])
 * @method Promise listConfigurationsAsync(array $args = [])
 * @method Result listKafkaVersions(array $args = [])
 * @method Promise listKafkaVersionsAsync(array $args = [])
 * @method Result listNodes(array $args = [])
 * @method Promise listNodesAsync(array $args = [])
 * @method Result listReplicators(array $args = [])
 * @method Promise listReplicatorsAsync(array $args = [])
 * @method Result listScramSecrets(array $args = [])
 * @method Promise listScramSecretsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listClientVpcConnections(array $args = [])
 * @method Promise listClientVpcConnectionsAsync(array $args = [])
 * @method Result listVpcConnections(array $args = [])
 * @method Promise listVpcConnectionsAsync(array $args = [])
 * @method Result rejectClientVpcConnection(array $args = [])
 * @method Promise rejectClientVpcConnectionAsync(array $args = [])
 * @method Result deleteClusterPolicy(array $args = [])
 * @method Promise deleteClusterPolicyAsync(array $args = [])
 * @method Result getClusterPolicy(array $args = [])
 * @method Promise getClusterPolicyAsync(array $args = [])
 * @method Result putClusterPolicy(array $args = [])
 * @method Promise putClusterPolicyAsync(array $args = [])
 * @method Result rebootBroker(array $args = [])
 * @method Promise rebootBrokerAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateBrokerCount(array $args = [])
 * @method Promise updateBrokerCountAsync(array $args = [])
 * @method Result updateBrokerType(array $args = [])
 * @method Promise updateBrokerTypeAsync(array $args = [])
 * @method Result updateBrokerStorage(array $args = [])
 * @method Promise updateBrokerStorageAsync(array $args = [])
 * @method Result updateConfiguration(array $args = [])
 * @method Promise updateConfigurationAsync(array $args = [])
 * @method Result updateClusterConfiguration(array $args = [])
 * @method Promise updateClusterConfigurationAsync(array $args = [])
 * @method Result updateClusterKafkaVersion(array $args = [])
 * @method Promise updateClusterKafkaVersionAsync(array $args = [])
 * @method Result updateConnectivity(array $args = [])
 * @method Promise updateConnectivityAsync(array $args = [])
 * @method Result updateMonitoring(array $args = [])
 * @method Promise updateMonitoringAsync(array $args = [])
 * @method Result updateReplicationInfo(array $args = [])
 * @method Promise updateReplicationInfoAsync(array $args = [])
 * @method Result updateSecurity(array $args = [])
 * @method Promise updateSecurityAsync(array $args = [])
 * @method Result updateStorage(array $args = [])
 * @method Promise updateStorageAsync(array $args = [])
 */
class KafkaClient extends AwsClient {}
