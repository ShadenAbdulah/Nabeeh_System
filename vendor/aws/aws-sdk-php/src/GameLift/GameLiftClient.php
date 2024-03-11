<?php
namespace Aws\GameLift;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon GameLift** service.
 *
 * @method Result acceptMatch(array $args = [])
 * @method Promise acceptMatchAsync(array $args = [])
 * @method Result claimGameServer(array $args = [])
 * @method Promise claimGameServerAsync(array $args = [])
 * @method Result createAlias(array $args = [])
 * @method Promise createAliasAsync(array $args = [])
 * @method Result createBuild(array $args = [])
 * @method Promise createBuildAsync(array $args = [])
 * @method Result createFleet(array $args = [])
 * @method Promise createFleetAsync(array $args = [])
 * @method Result createFleetLocations(array $args = [])
 * @method Promise createFleetLocationsAsync(array $args = [])
 * @method Result createGameServerGroup(array $args = [])
 * @method Promise createGameServerGroupAsync(array $args = [])
 * @method Result createGameSession(array $args = [])
 * @method Promise createGameSessionAsync(array $args = [])
 * @method Result createGameSessionQueue(array $args = [])
 * @method Promise createGameSessionQueueAsync(array $args = [])
 * @method Result createLocation(array $args = [])
 * @method Promise createLocationAsync(array $args = [])
 * @method Result createMatchmakingConfiguration(array $args = [])
 * @method Promise createMatchmakingConfigurationAsync(array $args = [])
 * @method Result createMatchmakingRuleSet(array $args = [])
 * @method Promise createMatchmakingRuleSetAsync(array $args = [])
 * @method Result createPlayerSession(array $args = [])
 * @method Promise createPlayerSessionAsync(array $args = [])
 * @method Result createPlayerSessions(array $args = [])
 * @method Promise createPlayerSessionsAsync(array $args = [])
 * @method Result createScript(array $args = [])
 * @method Promise createScriptAsync(array $args = [])
 * @method Result createVpcPeeringAuthorization(array $args = [])
 * @method Promise createVpcPeeringAuthorizationAsync(array $args = [])
 * @method Result createVpcPeeringConnection(array $args = [])
 * @method Promise createVpcPeeringConnectionAsync(array $args = [])
 * @method Result deleteAlias(array $args = [])
 * @method Promise deleteAliasAsync(array $args = [])
 * @method Result deleteBuild(array $args = [])
 * @method Promise deleteBuildAsync(array $args = [])
 * @method Result deleteFleet(array $args = [])
 * @method Promise deleteFleetAsync(array $args = [])
 * @method Result deleteFleetLocations(array $args = [])
 * @method Promise deleteFleetLocationsAsync(array $args = [])
 * @method Result deleteGameServerGroup(array $args = [])
 * @method Promise deleteGameServerGroupAsync(array $args = [])
 * @method Result deleteGameSessionQueue(array $args = [])
 * @method Promise deleteGameSessionQueueAsync(array $args = [])
 * @method Result deleteLocation(array $args = [])
 * @method Promise deleteLocationAsync(array $args = [])
 * @method Result deleteMatchmakingConfiguration(array $args = [])
 * @method Promise deleteMatchmakingConfigurationAsync(array $args = [])
 * @method Result deleteMatchmakingRuleSet(array $args = [])
 * @method Promise deleteMatchmakingRuleSetAsync(array $args = [])
 * @method Result deleteScalingPolicy(array $args = [])
 * @method Promise deleteScalingPolicyAsync(array $args = [])
 * @method Result deleteScript(array $args = [])
 * @method Promise deleteScriptAsync(array $args = [])
 * @method Result deleteVpcPeeringAuthorization(array $args = [])
 * @method Promise deleteVpcPeeringAuthorizationAsync(array $args = [])
 * @method Result deleteVpcPeeringConnection(array $args = [])
 * @method Promise deleteVpcPeeringConnectionAsync(array $args = [])
 * @method Result deregisterCompute(array $args = [])
 * @method Promise deregisterComputeAsync(array $args = [])
 * @method Result deregisterGameServer(array $args = [])
 * @method Promise deregisterGameServerAsync(array $args = [])
 * @method Result describeAlias(array $args = [])
 * @method Promise describeAliasAsync(array $args = [])
 * @method Result describeBuild(array $args = [])
 * @method Promise describeBuildAsync(array $args = [])
 * @method Result describeCompute(array $args = [])
 * @method Promise describeComputeAsync(array $args = [])
 * @method Result describeEC2InstanceLimits(array $args = [])
 * @method Promise describeEC2InstanceLimitsAsync(array $args = [])
 * @method Result describeFleetAttributes(array $args = [])
 * @method Promise describeFleetAttributesAsync(array $args = [])
 * @method Result describeFleetCapacity(array $args = [])
 * @method Promise describeFleetCapacityAsync(array $args = [])
 * @method Result describeFleetEvents(array $args = [])
 * @method Promise describeFleetEventsAsync(array $args = [])
 * @method Result describeFleetLocationAttributes(array $args = [])
 * @method Promise describeFleetLocationAttributesAsync(array $args = [])
 * @method Result describeFleetLocationCapacity(array $args = [])
 * @method Promise describeFleetLocationCapacityAsync(array $args = [])
 * @method Result describeFleetLocationUtilization(array $args = [])
 * @method Promise describeFleetLocationUtilizationAsync(array $args = [])
 * @method Result describeFleetPortSettings(array $args = [])
 * @method Promise describeFleetPortSettingsAsync(array $args = [])
 * @method Result describeFleetUtilization(array $args = [])
 * @method Promise describeFleetUtilizationAsync(array $args = [])
 * @method Result describeGameServer(array $args = [])
 * @method Promise describeGameServerAsync(array $args = [])
 * @method Result describeGameServerGroup(array $args = [])
 * @method Promise describeGameServerGroupAsync(array $args = [])
 * @method Result describeGameServerInstances(array $args = [])
 * @method Promise describeGameServerInstancesAsync(array $args = [])
 * @method Result describeGameSessionDetails(array $args = [])
 * @method Promise describeGameSessionDetailsAsync(array $args = [])
 * @method Result describeGameSessionPlacement(array $args = [])
 * @method Promise describeGameSessionPlacementAsync(array $args = [])
 * @method Result describeGameSessionQueues(array $args = [])
 * @method Promise describeGameSessionQueuesAsync(array $args = [])
 * @method Result describeGameSessions(array $args = [])
 * @method Promise describeGameSessionsAsync(array $args = [])
 * @method Result describeInstances(array $args = [])
 * @method Promise describeInstancesAsync(array $args = [])
 * @method Result describeMatchmaking(array $args = [])
 * @method Promise describeMatchmakingAsync(array $args = [])
 * @method Result describeMatchmakingConfigurations(array $args = [])
 * @method Promise describeMatchmakingConfigurationsAsync(array $args = [])
 * @method Result describeMatchmakingRuleSets(array $args = [])
 * @method Promise describeMatchmakingRuleSetsAsync(array $args = [])
 * @method Result describePlayerSessions(array $args = [])
 * @method Promise describePlayerSessionsAsync(array $args = [])
 * @method Result describeRuntimeConfiguration(array $args = [])
 * @method Promise describeRuntimeConfigurationAsync(array $args = [])
 * @method Result describeScalingPolicies(array $args = [])
 * @method Promise describeScalingPoliciesAsync(array $args = [])
 * @method Result describeScript(array $args = [])
 * @method Promise describeScriptAsync(array $args = [])
 * @method Result describeVpcPeeringAuthorizations(array $args = [])
 * @method Promise describeVpcPeeringAuthorizationsAsync(array $args = [])
 * @method Result describeVpcPeeringConnections(array $args = [])
 * @method Promise describeVpcPeeringConnectionsAsync(array $args = [])
 * @method Result getComputeAccess(array $args = [])
 * @method Promise getComputeAccessAsync(array $args = [])
 * @method Result getComputeAuthToken(array $args = [])
 * @method Promise getComputeAuthTokenAsync(array $args = [])
 * @method Result getGameSessionLogUrl(array $args = [])
 * @method Promise getGameSessionLogUrlAsync(array $args = [])
 * @method Result getInstanceAccess(array $args = [])
 * @method Promise getInstanceAccessAsync(array $args = [])
 * @method Result listAliases(array $args = [])
 * @method Promise listAliasesAsync(array $args = [])
 * @method Result listBuilds(array $args = [])
 * @method Promise listBuildsAsync(array $args = [])
 * @method Result listCompute(array $args = [])
 * @method Promise listComputeAsync(array $args = [])
 * @method Result listFleets(array $args = [])
 * @method Promise listFleetsAsync(array $args = [])
 * @method Result listGameServerGroups(array $args = [])
 * @method Promise listGameServerGroupsAsync(array $args = [])
 * @method Result listGameServers(array $args = [])
 * @method Promise listGameServersAsync(array $args = [])
 * @method Result listLocations(array $args = [])
 * @method Promise listLocationsAsync(array $args = [])
 * @method Result listScripts(array $args = [])
 * @method Promise listScriptsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putScalingPolicy(array $args = [])
 * @method Promise putScalingPolicyAsync(array $args = [])
 * @method Result registerCompute(array $args = [])
 * @method Promise registerComputeAsync(array $args = [])
 * @method Result registerGameServer(array $args = [])
 * @method Promise registerGameServerAsync(array $args = [])
 * @method Result requestUploadCredentials(array $args = [])
 * @method Promise requestUploadCredentialsAsync(array $args = [])
 * @method Result resolveAlias(array $args = [])
 * @method Promise resolveAliasAsync(array $args = [])
 * @method Result resumeGameServerGroup(array $args = [])
 * @method Promise resumeGameServerGroupAsync(array $args = [])
 * @method Result searchGameSessions(array $args = [])
 * @method Promise searchGameSessionsAsync(array $args = [])
 * @method Result startFleetActions(array $args = [])
 * @method Promise startFleetActionsAsync(array $args = [])
 * @method Result startGameSessionPlacement(array $args = [])
 * @method Promise startGameSessionPlacementAsync(array $args = [])
 * @method Result startMatchBackfill(array $args = [])
 * @method Promise startMatchBackfillAsync(array $args = [])
 * @method Result startMatchmaking(array $args = [])
 * @method Promise startMatchmakingAsync(array $args = [])
 * @method Result stopFleetActions(array $args = [])
 * @method Promise stopFleetActionsAsync(array $args = [])
 * @method Result stopGameSessionPlacement(array $args = [])
 * @method Promise stopGameSessionPlacementAsync(array $args = [])
 * @method Result stopMatchmaking(array $args = [])
 * @method Promise stopMatchmakingAsync(array $args = [])
 * @method Result suspendGameServerGroup(array $args = [])
 * @method Promise suspendGameServerGroupAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAlias(array $args = [])
 * @method Promise updateAliasAsync(array $args = [])
 * @method Result updateBuild(array $args = [])
 * @method Promise updateBuildAsync(array $args = [])
 * @method Result updateFleetAttributes(array $args = [])
 * @method Promise updateFleetAttributesAsync(array $args = [])
 * @method Result updateFleetCapacity(array $args = [])
 * @method Promise updateFleetCapacityAsync(array $args = [])
 * @method Result updateFleetPortSettings(array $args = [])
 * @method Promise updateFleetPortSettingsAsync(array $args = [])
 * @method Result updateGameServer(array $args = [])
 * @method Promise updateGameServerAsync(array $args = [])
 * @method Result updateGameServerGroup(array $args = [])
 * @method Promise updateGameServerGroupAsync(array $args = [])
 * @method Result updateGameSession(array $args = [])
 * @method Promise updateGameSessionAsync(array $args = [])
 * @method Result updateGameSessionQueue(array $args = [])
 * @method Promise updateGameSessionQueueAsync(array $args = [])
 * @method Result updateMatchmakingConfiguration(array $args = [])
 * @method Promise updateMatchmakingConfigurationAsync(array $args = [])
 * @method Result updateRuntimeConfiguration(array $args = [])
 * @method Promise updateRuntimeConfigurationAsync(array $args = [])
 * @method Result updateScript(array $args = [])
 * @method Promise updateScriptAsync(array $args = [])
 * @method Result validateMatchmakingRuleSet(array $args = [])
 * @method Promise validateMatchmakingRuleSetAsync(array $args = [])
 */
class GameLiftClient extends AwsClient {}
