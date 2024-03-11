<?php
namespace Aws\mgn;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Application Migration Service** service.
 * @method Result archiveApplication(array $args = [])
 * @method Promise archiveApplicationAsync(array $args = [])
 * @method Result archiveWave(array $args = [])
 * @method Promise archiveWaveAsync(array $args = [])
 * @method Result associateApplications(array $args = [])
 * @method Promise associateApplicationsAsync(array $args = [])
 * @method Result associateSourceServers(array $args = [])
 * @method Promise associateSourceServersAsync(array $args = [])
 * @method Result changeServerLifeCycleState(array $args = [])
 * @method Promise changeServerLifeCycleStateAsync(array $args = [])
 * @method Result createApplication(array $args = [])
 * @method Promise createApplicationAsync(array $args = [])
 * @method Result createConnector(array $args = [])
 * @method Promise createConnectorAsync(array $args = [])
 * @method Result createLaunchConfigurationTemplate(array $args = [])
 * @method Promise createLaunchConfigurationTemplateAsync(array $args = [])
 * @method Result createReplicationConfigurationTemplate(array $args = [])
 * @method Promise createReplicationConfigurationTemplateAsync(array $args = [])
 * @method Result createWave(array $args = [])
 * @method Promise createWaveAsync(array $args = [])
 * @method Result deleteApplication(array $args = [])
 * @method Promise deleteApplicationAsync(array $args = [])
 * @method Result deleteConnector(array $args = [])
 * @method Promise deleteConnectorAsync(array $args = [])
 * @method Result deleteJob(array $args = [])
 * @method Promise deleteJobAsync(array $args = [])
 * @method Result deleteLaunchConfigurationTemplate(array $args = [])
 * @method Promise deleteLaunchConfigurationTemplateAsync(array $args = [])
 * @method Result deleteReplicationConfigurationTemplate(array $args = [])
 * @method Promise deleteReplicationConfigurationTemplateAsync(array $args = [])
 * @method Result deleteSourceServer(array $args = [])
 * @method Promise deleteSourceServerAsync(array $args = [])
 * @method Result deleteVcenterClient(array $args = [])
 * @method Promise deleteVcenterClientAsync(array $args = [])
 * @method Result deleteWave(array $args = [])
 * @method Promise deleteWaveAsync(array $args = [])
 * @method Result describeJobLogItems(array $args = [])
 * @method Promise describeJobLogItemsAsync(array $args = [])
 * @method Result describeJobs(array $args = [])
 * @method Promise describeJobsAsync(array $args = [])
 * @method Result describeLaunchConfigurationTemplates(array $args = [])
 * @method Promise describeLaunchConfigurationTemplatesAsync(array $args = [])
 * @method Result describeReplicationConfigurationTemplates(array $args = [])
 * @method Promise describeReplicationConfigurationTemplatesAsync(array $args = [])
 * @method Result describeSourceServers(array $args = [])
 * @method Promise describeSourceServersAsync(array $args = [])
 * @method Result describeVcenterClients(array $args = [])
 * @method Promise describeVcenterClientsAsync(array $args = [])
 * @method Result disassociateApplications(array $args = [])
 * @method Promise disassociateApplicationsAsync(array $args = [])
 * @method Result disassociateSourceServers(array $args = [])
 * @method Promise disassociateSourceServersAsync(array $args = [])
 * @method Result disconnectFromService(array $args = [])
 * @method Promise disconnectFromServiceAsync(array $args = [])
 * @method Result finalizeCutover(array $args = [])
 * @method Promise finalizeCutoverAsync(array $args = [])
 * @method Result getLaunchConfiguration(array $args = [])
 * @method Promise getLaunchConfigurationAsync(array $args = [])
 * @method Result getReplicationConfiguration(array $args = [])
 * @method Promise getReplicationConfigurationAsync(array $args = [])
 * @method Result initializeService(array $args = [])
 * @method Promise initializeServiceAsync(array $args = [])
 * @method Result listApplications(array $args = [])
 * @method Promise listApplicationsAsync(array $args = [])
 * @method Result listConnectors(array $args = [])
 * @method Promise listConnectorsAsync(array $args = [])
 * @method Result listExportErrors(array $args = [])
 * @method Promise listExportErrorsAsync(array $args = [])
 * @method Result listExports(array $args = [])
 * @method Promise listExportsAsync(array $args = [])
 * @method Result listImportErrors(array $args = [])
 * @method Promise listImportErrorsAsync(array $args = [])
 * @method Result listImports(array $args = [])
 * @method Promise listImportsAsync(array $args = [])
 * @method Result listManagedAccounts(array $args = [])
 * @method Promise listManagedAccountsAsync(array $args = [])
 * @method Result listSourceServerActions(array $args = [])
 * @method Promise listSourceServerActionsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTemplateActions(array $args = [])
 * @method Promise listTemplateActionsAsync(array $args = [])
 * @method Result listWaves(array $args = [])
 * @method Promise listWavesAsync(array $args = [])
 * @method Result markAsArchived(array $args = [])
 * @method Promise markAsArchivedAsync(array $args = [])
 * @method Result pauseReplication(array $args = [])
 * @method Promise pauseReplicationAsync(array $args = [])
 * @method Result putSourceServerAction(array $args = [])
 * @method Promise putSourceServerActionAsync(array $args = [])
 * @method Result putTemplateAction(array $args = [])
 * @method Promise putTemplateActionAsync(array $args = [])
 * @method Result removeSourceServerAction(array $args = [])
 * @method Promise removeSourceServerActionAsync(array $args = [])
 * @method Result removeTemplateAction(array $args = [])
 * @method Promise removeTemplateActionAsync(array $args = [])
 * @method Result resumeReplication(array $args = [])
 * @method Promise resumeReplicationAsync(array $args = [])
 * @method Result retryDataReplication(array $args = [])
 * @method Promise retryDataReplicationAsync(array $args = [])
 * @method Result startCutover(array $args = [])
 * @method Promise startCutoverAsync(array $args = [])
 * @method Result startExport(array $args = [])
 * @method Promise startExportAsync(array $args = [])
 * @method Result startImport(array $args = [])
 * @method Promise startImportAsync(array $args = [])
 * @method Result startReplication(array $args = [])
 * @method Promise startReplicationAsync(array $args = [])
 * @method Result startTest(array $args = [])
 * @method Promise startTestAsync(array $args = [])
 * @method Result stopReplication(array $args = [])
 * @method Promise stopReplicationAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result terminateTargetInstances(array $args = [])
 * @method Promise terminateTargetInstancesAsync(array $args = [])
 * @method Result unarchiveApplication(array $args = [])
 * @method Promise unarchiveApplicationAsync(array $args = [])
 * @method Result unarchiveWave(array $args = [])
 * @method Promise unarchiveWaveAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateApplication(array $args = [])
 * @method Promise updateApplicationAsync(array $args = [])
 * @method Result updateConnector(array $args = [])
 * @method Promise updateConnectorAsync(array $args = [])
 * @method Result updateLaunchConfiguration(array $args = [])
 * @method Promise updateLaunchConfigurationAsync(array $args = [])
 * @method Result updateLaunchConfigurationTemplate(array $args = [])
 * @method Promise updateLaunchConfigurationTemplateAsync(array $args = [])
 * @method Result updateReplicationConfiguration(array $args = [])
 * @method Promise updateReplicationConfigurationAsync(array $args = [])
 * @method Result updateReplicationConfigurationTemplate(array $args = [])
 * @method Promise updateReplicationConfigurationTemplateAsync(array $args = [])
 * @method Result updateSourceServer(array $args = [])
 * @method Promise updateSourceServerAsync(array $args = [])
 * @method Result updateSourceServerReplicationType(array $args = [])
 * @method Promise updateSourceServerReplicationTypeAsync(array $args = [])
 * @method Result updateWave(array $args = [])
 * @method Promise updateWaveAsync(array $args = [])
 */
class mgnClient extends AwsClient {}
