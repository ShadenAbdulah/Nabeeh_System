<?php
namespace Aws\SupportApp;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Support App** service.
 * @method Result createSlackChannelConfiguration(array $args = [])
 * @method Promise createSlackChannelConfigurationAsync(array $args = [])
 * @method Result deleteAccountAlias(array $args = [])
 * @method Promise deleteAccountAliasAsync(array $args = [])
 * @method Result deleteSlackChannelConfiguration(array $args = [])
 * @method Promise deleteSlackChannelConfigurationAsync(array $args = [])
 * @method Result deleteSlackWorkspaceConfiguration(array $args = [])
 * @method Promise deleteSlackWorkspaceConfigurationAsync(array $args = [])
 * @method Result getAccountAlias(array $args = [])
 * @method Promise getAccountAliasAsync(array $args = [])
 * @method Result listSlackChannelConfigurations(array $args = [])
 * @method Promise listSlackChannelConfigurationsAsync(array $args = [])
 * @method Result listSlackWorkspaceConfigurations(array $args = [])
 * @method Promise listSlackWorkspaceConfigurationsAsync(array $args = [])
 * @method Result putAccountAlias(array $args = [])
 * @method Promise putAccountAliasAsync(array $args = [])
 * @method Result registerSlackWorkspaceForOrganization(array $args = [])
 * @method Promise registerSlackWorkspaceForOrganizationAsync(array $args = [])
 * @method Result updateSlackChannelConfiguration(array $args = [])
 * @method Promise updateSlackChannelConfigurationAsync(array $args = [])
 */
class SupportAppClient extends AwsClient {}
