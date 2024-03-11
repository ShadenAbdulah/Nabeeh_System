<?php
namespace Aws\Ssm;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * Amazon EC2 Simple Systems Manager client.
 *
 * @method Result addTagsToResource(array $args = [])
 * @method Promise addTagsToResourceAsync(array $args = [])
 * @method Result associateOpsItemRelatedItem(array $args = [])
 * @method Promise associateOpsItemRelatedItemAsync(array $args = [])
 * @method Result cancelCommand(array $args = [])
 * @method Promise cancelCommandAsync(array $args = [])
 * @method Result cancelMaintenanceWindowExecution(array $args = [])
 * @method Promise cancelMaintenanceWindowExecutionAsync(array $args = [])
 * @method Result createActivation(array $args = [])
 * @method Promise createActivationAsync(array $args = [])
 * @method Result createAssociation(array $args = [])
 * @method Promise createAssociationAsync(array $args = [])
 * @method Result createAssociationBatch(array $args = [])
 * @method Promise createAssociationBatchAsync(array $args = [])
 * @method Result createDocument(array $args = [])
 * @method Promise createDocumentAsync(array $args = [])
 * @method Result createMaintenanceWindow(array $args = [])
 * @method Promise createMaintenanceWindowAsync(array $args = [])
 * @method Result createOpsItem(array $args = [])
 * @method Promise createOpsItemAsync(array $args = [])
 * @method Result createOpsMetadata(array $args = [])
 * @method Promise createOpsMetadataAsync(array $args = [])
 * @method Result createPatchBaseline(array $args = [])
 * @method Promise createPatchBaselineAsync(array $args = [])
 * @method Result createResourceDataSync(array $args = [])
 * @method Promise createResourceDataSyncAsync(array $args = [])
 * @method Result deleteActivation(array $args = [])
 * @method Promise deleteActivationAsync(array $args = [])
 * @method Result deleteAssociation(array $args = [])
 * @method Promise deleteAssociationAsync(array $args = [])
 * @method Result deleteDocument(array $args = [])
 * @method Promise deleteDocumentAsync(array $args = [])
 * @method Result deleteInventory(array $args = [])
 * @method Promise deleteInventoryAsync(array $args = [])
 * @method Result deleteMaintenanceWindow(array $args = [])
 * @method Promise deleteMaintenanceWindowAsync(array $args = [])
 * @method Result deleteOpsItem(array $args = [])
 * @method Promise deleteOpsItemAsync(array $args = [])
 * @method Result deleteOpsMetadata(array $args = [])
 * @method Promise deleteOpsMetadataAsync(array $args = [])
 * @method Result deleteParameter(array $args = [])
 * @method Promise deleteParameterAsync(array $args = [])
 * @method Result deleteParameters(array $args = [])
 * @method Promise deleteParametersAsync(array $args = [])
 * @method Result deletePatchBaseline(array $args = [])
 * @method Promise deletePatchBaselineAsync(array $args = [])
 * @method Result deleteResourceDataSync(array $args = [])
 * @method Promise deleteResourceDataSyncAsync(array $args = [])
 * @method Result deleteResourcePolicy(array $args = [])
 * @method Promise deleteResourcePolicyAsync(array $args = [])
 * @method Result deregisterManagedInstance(array $args = [])
 * @method Promise deregisterManagedInstanceAsync(array $args = [])
 * @method Result deregisterPatchBaselineForPatchGroup(array $args = [])
 * @method Promise deregisterPatchBaselineForPatchGroupAsync(array $args = [])
 * @method Result deregisterTargetFromMaintenanceWindow(array $args = [])
 * @method Promise deregisterTargetFromMaintenanceWindowAsync(array $args = [])
 * @method Result deregisterTaskFromMaintenanceWindow(array $args = [])
 * @method Promise deregisterTaskFromMaintenanceWindowAsync(array $args = [])
 * @method Result describeActivations(array $args = [])
 * @method Promise describeActivationsAsync(array $args = [])
 * @method Result describeAssociation(array $args = [])
 * @method Promise describeAssociationAsync(array $args = [])
 * @method Result describeAssociationExecutionTargets(array $args = [])
 * @method Promise describeAssociationExecutionTargetsAsync(array $args = [])
 * @method Result describeAssociationExecutions(array $args = [])
 * @method Promise describeAssociationExecutionsAsync(array $args = [])
 * @method Result describeAutomationExecutions(array $args = [])
 * @method Promise describeAutomationExecutionsAsync(array $args = [])
 * @method Result describeAutomationStepExecutions(array $args = [])
 * @method Promise describeAutomationStepExecutionsAsync(array $args = [])
 * @method Result describeAvailablePatches(array $args = [])
 * @method Promise describeAvailablePatchesAsync(array $args = [])
 * @method Result describeDocument(array $args = [])
 * @method Promise describeDocumentAsync(array $args = [])
 * @method Result describeDocumentPermission(array $args = [])
 * @method Promise describeDocumentPermissionAsync(array $args = [])
 * @method Result describeEffectiveInstanceAssociations(array $args = [])
 * @method Promise describeEffectiveInstanceAssociationsAsync(array $args = [])
 * @method Result describeEffectivePatchesForPatchBaseline(array $args = [])
 * @method Promise describeEffectivePatchesForPatchBaselineAsync(array $args = [])
 * @method Result describeInstanceAssociationsStatus(array $args = [])
 * @method Promise describeInstanceAssociationsStatusAsync(array $args = [])
 * @method Result describeInstanceInformation(array $args = [])
 * @method Promise describeInstanceInformationAsync(array $args = [])
 * @method Result describeInstancePatchStates(array $args = [])
 * @method Promise describeInstancePatchStatesAsync(array $args = [])
 * @method Result describeInstancePatchStatesForPatchGroup(array $args = [])
 * @method Promise describeInstancePatchStatesForPatchGroupAsync(array $args = [])
 * @method Result describeInstancePatches(array $args = [])
 * @method Promise describeInstancePatchesAsync(array $args = [])
 * @method Result describeInventoryDeletions(array $args = [])
 * @method Promise describeInventoryDeletionsAsync(array $args = [])
 * @method Result describeMaintenanceWindowExecutionTaskInvocations(array $args = [])
 * @method Promise describeMaintenanceWindowExecutionTaskInvocationsAsync(array $args = [])
 * @method Result describeMaintenanceWindowExecutionTasks(array $args = [])
 * @method Promise describeMaintenanceWindowExecutionTasksAsync(array $args = [])
 * @method Result describeMaintenanceWindowExecutions(array $args = [])
 * @method Promise describeMaintenanceWindowExecutionsAsync(array $args = [])
 * @method Result describeMaintenanceWindowSchedule(array $args = [])
 * @method Promise describeMaintenanceWindowScheduleAsync(array $args = [])
 * @method Result describeMaintenanceWindowTargets(array $args = [])
 * @method Promise describeMaintenanceWindowTargetsAsync(array $args = [])
 * @method Result describeMaintenanceWindowTasks(array $args = [])
 * @method Promise describeMaintenanceWindowTasksAsync(array $args = [])
 * @method Result describeMaintenanceWindows(array $args = [])
 * @method Promise describeMaintenanceWindowsAsync(array $args = [])
 * @method Result describeMaintenanceWindowsForTarget(array $args = [])
 * @method Promise describeMaintenanceWindowsForTargetAsync(array $args = [])
 * @method Result describeOpsItems(array $args = [])
 * @method Promise describeOpsItemsAsync(array $args = [])
 * @method Result describeParameters(array $args = [])
 * @method Promise describeParametersAsync(array $args = [])
 * @method Result describePatchBaselines(array $args = [])
 * @method Promise describePatchBaselinesAsync(array $args = [])
 * @method Result describePatchGroupState(array $args = [])
 * @method Promise describePatchGroupStateAsync(array $args = [])
 * @method Result describePatchGroups(array $args = [])
 * @method Promise describePatchGroupsAsync(array $args = [])
 * @method Result describePatchProperties(array $args = [])
 * @method Promise describePatchPropertiesAsync(array $args = [])
 * @method Result describeSessions(array $args = [])
 * @method Promise describeSessionsAsync(array $args = [])
 * @method Result disassociateOpsItemRelatedItem(array $args = [])
 * @method Promise disassociateOpsItemRelatedItemAsync(array $args = [])
 * @method Result getAutomationExecution(array $args = [])
 * @method Promise getAutomationExecutionAsync(array $args = [])
 * @method Result getCalendarState(array $args = [])
 * @method Promise getCalendarStateAsync(array $args = [])
 * @method Result getCommandInvocation(array $args = [])
 * @method Promise getCommandInvocationAsync(array $args = [])
 * @method Result getConnectionStatus(array $args = [])
 * @method Promise getConnectionStatusAsync(array $args = [])
 * @method Result getDefaultPatchBaseline(array $args = [])
 * @method Promise getDefaultPatchBaselineAsync(array $args = [])
 * @method Result getDeployablePatchSnapshotForInstance(array $args = [])
 * @method Promise getDeployablePatchSnapshotForInstanceAsync(array $args = [])
 * @method Result getDocument(array $args = [])
 * @method Promise getDocumentAsync(array $args = [])
 * @method Result getInventory(array $args = [])
 * @method Promise getInventoryAsync(array $args = [])
 * @method Result getInventorySchema(array $args = [])
 * @method Promise getInventorySchemaAsync(array $args = [])
 * @method Result getMaintenanceWindow(array $args = [])
 * @method Promise getMaintenanceWindowAsync(array $args = [])
 * @method Result getMaintenanceWindowExecution(array $args = [])
 * @method Promise getMaintenanceWindowExecutionAsync(array $args = [])
 * @method Result getMaintenanceWindowExecutionTask(array $args = [])
 * @method Promise getMaintenanceWindowExecutionTaskAsync(array $args = [])
 * @method Result getMaintenanceWindowExecutionTaskInvocation(array $args = [])
 * @method Promise getMaintenanceWindowExecutionTaskInvocationAsync(array $args = [])
 * @method Result getMaintenanceWindowTask(array $args = [])
 * @method Promise getMaintenanceWindowTaskAsync(array $args = [])
 * @method Result getOpsItem(array $args = [])
 * @method Promise getOpsItemAsync(array $args = [])
 * @method Result getOpsMetadata(array $args = [])
 * @method Promise getOpsMetadataAsync(array $args = [])
 * @method Result getOpsSummary(array $args = [])
 * @method Promise getOpsSummaryAsync(array $args = [])
 * @method Result getParameter(array $args = [])
 * @method Promise getParameterAsync(array $args = [])
 * @method Result getParameterHistory(array $args = [])
 * @method Promise getParameterHistoryAsync(array $args = [])
 * @method Result getParameters(array $args = [])
 * @method Promise getParametersAsync(array $args = [])
 * @method Result getParametersByPath(array $args = [])
 * @method Promise getParametersByPathAsync(array $args = [])
 * @method Result getPatchBaseline(array $args = [])
 * @method Promise getPatchBaselineAsync(array $args = [])
 * @method Result getPatchBaselineForPatchGroup(array $args = [])
 * @method Promise getPatchBaselineForPatchGroupAsync(array $args = [])
 * @method Result getResourcePolicies(array $args = [])
 * @method Promise getResourcePoliciesAsync(array $args = [])
 * @method Result getServiceSetting(array $args = [])
 * @method Promise getServiceSettingAsync(array $args = [])
 * @method Result labelParameterVersion(array $args = [])
 * @method Promise labelParameterVersionAsync(array $args = [])
 * @method Result listAssociationVersions(array $args = [])
 * @method Promise listAssociationVersionsAsync(array $args = [])
 * @method Result listAssociations(array $args = [])
 * @method Promise listAssociationsAsync(array $args = [])
 * @method Result listCommandInvocations(array $args = [])
 * @method Promise listCommandInvocationsAsync(array $args = [])
 * @method Result listCommands(array $args = [])
 * @method Promise listCommandsAsync(array $args = [])
 * @method Result listComplianceItems(array $args = [])
 * @method Promise listComplianceItemsAsync(array $args = [])
 * @method Result listComplianceSummaries(array $args = [])
 * @method Promise listComplianceSummariesAsync(array $args = [])
 * @method Result listDocumentMetadataHistory(array $args = [])
 * @method Promise listDocumentMetadataHistoryAsync(array $args = [])
 * @method Result listDocumentVersions(array $args = [])
 * @method Promise listDocumentVersionsAsync(array $args = [])
 * @method Result listDocuments(array $args = [])
 * @method Promise listDocumentsAsync(array $args = [])
 * @method Result listInventoryEntries(array $args = [])
 * @method Promise listInventoryEntriesAsync(array $args = [])
 * @method Result listOpsItemEvents(array $args = [])
 * @method Promise listOpsItemEventsAsync(array $args = [])
 * @method Result listOpsItemRelatedItems(array $args = [])
 * @method Promise listOpsItemRelatedItemsAsync(array $args = [])
 * @method Result listOpsMetadata(array $args = [])
 * @method Promise listOpsMetadataAsync(array $args = [])
 * @method Result listResourceComplianceSummaries(array $args = [])
 * @method Promise listResourceComplianceSummariesAsync(array $args = [])
 * @method Result listResourceDataSync(array $args = [])
 * @method Promise listResourceDataSyncAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result modifyDocumentPermission(array $args = [])
 * @method Promise modifyDocumentPermissionAsync(array $args = [])
 * @method Result putComplianceItems(array $args = [])
 * @method Promise putComplianceItemsAsync(array $args = [])
 * @method Result putInventory(array $args = [])
 * @method Promise putInventoryAsync(array $args = [])
 * @method Result putParameter(array $args = [])
 * @method Promise putParameterAsync(array $args = [])
 * @method Result putResourcePolicy(array $args = [])
 * @method Promise putResourcePolicyAsync(array $args = [])
 * @method Result registerDefaultPatchBaseline(array $args = [])
 * @method Promise registerDefaultPatchBaselineAsync(array $args = [])
 * @method Result registerPatchBaselineForPatchGroup(array $args = [])
 * @method Promise registerPatchBaselineForPatchGroupAsync(array $args = [])
 * @method Result registerTargetWithMaintenanceWindow(array $args = [])
 * @method Promise registerTargetWithMaintenanceWindowAsync(array $args = [])
 * @method Result registerTaskWithMaintenanceWindow(array $args = [])
 * @method Promise registerTaskWithMaintenanceWindowAsync(array $args = [])
 * @method Result removeTagsFromResource(array $args = [])
 * @method Promise removeTagsFromResourceAsync(array $args = [])
 * @method Result resetServiceSetting(array $args = [])
 * @method Promise resetServiceSettingAsync(array $args = [])
 * @method Result resumeSession(array $args = [])
 * @method Promise resumeSessionAsync(array $args = [])
 * @method Result sendAutomationSignal(array $args = [])
 * @method Promise sendAutomationSignalAsync(array $args = [])
 * @method Result sendCommand(array $args = [])
 * @method Promise sendCommandAsync(array $args = [])
 * @method Result startAssociationsOnce(array $args = [])
 * @method Promise startAssociationsOnceAsync(array $args = [])
 * @method Result startAutomationExecution(array $args = [])
 * @method Promise startAutomationExecutionAsync(array $args = [])
 * @method Result startChangeRequestExecution(array $args = [])
 * @method Promise startChangeRequestExecutionAsync(array $args = [])
 * @method Result startSession(array $args = [])
 * @method Promise startSessionAsync(array $args = [])
 * @method Result stopAutomationExecution(array $args = [])
 * @method Promise stopAutomationExecutionAsync(array $args = [])
 * @method Result terminateSession(array $args = [])
 * @method Promise terminateSessionAsync(array $args = [])
 * @method Result unlabelParameterVersion(array $args = [])
 * @method Promise unlabelParameterVersionAsync(array $args = [])
 * @method Result updateAssociation(array $args = [])
 * @method Promise updateAssociationAsync(array $args = [])
 * @method Result updateAssociationStatus(array $args = [])
 * @method Promise updateAssociationStatusAsync(array $args = [])
 * @method Result updateDocument(array $args = [])
 * @method Promise updateDocumentAsync(array $args = [])
 * @method Result updateDocumentDefaultVersion(array $args = [])
 * @method Promise updateDocumentDefaultVersionAsync(array $args = [])
 * @method Result updateDocumentMetadata(array $args = [])
 * @method Promise updateDocumentMetadataAsync(array $args = [])
 * @method Result updateMaintenanceWindow(array $args = [])
 * @method Promise updateMaintenanceWindowAsync(array $args = [])
 * @method Result updateMaintenanceWindowTarget(array $args = [])
 * @method Promise updateMaintenanceWindowTargetAsync(array $args = [])
 * @method Result updateMaintenanceWindowTask(array $args = [])
 * @method Promise updateMaintenanceWindowTaskAsync(array $args = [])
 * @method Result updateManagedInstanceRole(array $args = [])
 * @method Promise updateManagedInstanceRoleAsync(array $args = [])
 * @method Result updateOpsItem(array $args = [])
 * @method Promise updateOpsItemAsync(array $args = [])
 * @method Result updateOpsMetadata(array $args = [])
 * @method Promise updateOpsMetadataAsync(array $args = [])
 * @method Result updatePatchBaseline(array $args = [])
 * @method Promise updatePatchBaselineAsync(array $args = [])
 * @method Result updateResourceDataSync(array $args = [])
 * @method Promise updateResourceDataSyncAsync(array $args = [])
 * @method Result updateServiceSetting(array $args = [])
 * @method Promise updateServiceSettingAsync(array $args = [])
 */
class SsmClient extends AwsClient {}
