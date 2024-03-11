<?php

namespace Aws\Chatbot;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **chatbot** service.
 * @method Result createChimeWebhookConfiguration(array $args = [])
 * @method Promise createChimeWebhookConfigurationAsync(array $args = [])
 * @method Result createMicrosoftTeamsChannelConfiguration(array $args = [])
 * @method Promise createMicrosoftTeamsChannelConfigurationAsync(array $args = [])
 * @method Result createSlackChannelConfiguration(array $args = [])
 * @method Promise createSlackChannelConfigurationAsync(array $args = [])
 * @method Result deleteChimeWebhookConfiguration(array $args = [])
 * @method Promise deleteChimeWebhookConfigurationAsync(array $args = [])
 * @method Result deleteMicrosoftTeamsChannelConfiguration(array $args = [])
 * @method Promise deleteMicrosoftTeamsChannelConfigurationAsync(array $args = [])
 * @method Result deleteMicrosoftTeamsConfiguredTeam(array $args = [])
 * @method Promise deleteMicrosoftTeamsConfiguredTeamAsync(array $args = [])
 * @method Result deleteMicrosoftTeamsUserIdentity(array $args = [])
 * @method Promise deleteMicrosoftTeamsUserIdentityAsync(array $args = [])
 * @method Result deleteSlackChannelConfiguration(array $args = [])
 * @method Promise deleteSlackChannelConfigurationAsync(array $args = [])
 * @method Result deleteSlackUserIdentity(array $args = [])
 * @method Promise deleteSlackUserIdentityAsync(array $args = [])
 * @method Result deleteSlackWorkspaceAuthorization(array $args = [])
 * @method Promise deleteSlackWorkspaceAuthorizationAsync(array $args = [])
 * @method Result describeChimeWebhookConfigurations(array $args = [])
 * @method Promise describeChimeWebhookConfigurationsAsync(array $args = [])
 * @method Result describeSlackChannelConfigurations(array $args = [])
 * @method Promise describeSlackChannelConfigurationsAsync(array $args = [])
 * @method Result describeSlackUserIdentities(array $args = [])
 * @method Promise describeSlackUserIdentitiesAsync(array $args = [])
 * @method Result describeSlackWorkspaces(array $args = [])
 * @method Promise describeSlackWorkspacesAsync(array $args = [])
 * @method Result getAccountPreferences(array $args = [])
 * @method Promise getAccountPreferencesAsync(array $args = [])
 * @method Result getMicrosoftTeamsChannelConfiguration(array $args = [])
 * @method Promise getMicrosoftTeamsChannelConfigurationAsync(array $args = [])
 * @method Result listMicrosoftTeamsChannelConfigurations(array $args = [])
 * @method Promise listMicrosoftTeamsChannelConfigurationsAsync(array $args = [])
 * @method Result listMicrosoftTeamsConfiguredTeams(array $args = [])
 * @method Promise listMicrosoftTeamsConfiguredTeamsAsync(array $args = [])
 * @method Result listMicrosoftTeamsUserIdentities(array $args = [])
 * @method Promise listMicrosoftTeamsUserIdentitiesAsync(array $args = [])
 * @method Result updateAccountPreferences(array $args = [])
 * @method Promise updateAccountPreferencesAsync(array $args = [])
 * @method Result updateChimeWebhookConfiguration(array $args = [])
 * @method Promise updateChimeWebhookConfigurationAsync(array $args = [])
 * @method Result updateMicrosoftTeamsChannelConfiguration(array $args = [])
 * @method Promise updateMicrosoftTeamsChannelConfigurationAsync(array $args = [])
 * @method Result updateSlackChannelConfiguration(array $args = [])
 * @method Promise updateSlackChannelConfigurationAsync(array $args = [])
 */
class ChatbotClient extends AwsClient
{
}
