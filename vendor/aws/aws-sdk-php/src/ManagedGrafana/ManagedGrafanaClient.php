<?php
namespace Aws\ManagedGrafana;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Managed Grafana** service.
 * @method Result associateLicense(array $args = [])
 * @method Promise associateLicenseAsync(array $args = [])
 * @method Result createWorkspace(array $args = [])
 * @method Promise createWorkspaceAsync(array $args = [])
 * @method Result createWorkspaceApiKey(array $args = [])
 * @method Promise createWorkspaceApiKeyAsync(array $args = [])
 * @method Result deleteWorkspace(array $args = [])
 * @method Promise deleteWorkspaceAsync(array $args = [])
 * @method Result deleteWorkspaceApiKey(array $args = [])
 * @method Promise deleteWorkspaceApiKeyAsync(array $args = [])
 * @method Result describeWorkspace(array $args = [])
 * @method Promise describeWorkspaceAsync(array $args = [])
 * @method Result describeWorkspaceAuthentication(array $args = [])
 * @method Promise describeWorkspaceAuthenticationAsync(array $args = [])
 * @method Result describeWorkspaceConfiguration(array $args = [])
 * @method Promise describeWorkspaceConfigurationAsync(array $args = [])
 * @method Result disassociateLicense(array $args = [])
 * @method Promise disassociateLicenseAsync(array $args = [])
 * @method Result listPermissions(array $args = [])
 * @method Promise listPermissionsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listVersions(array $args = [])
 * @method Promise listVersionsAsync(array $args = [])
 * @method Result listWorkspaces(array $args = [])
 * @method Promise listWorkspacesAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updatePermissions(array $args = [])
 * @method Promise updatePermissionsAsync(array $args = [])
 * @method Result updateWorkspace(array $args = [])
 * @method Promise updateWorkspaceAsync(array $args = [])
 * @method Result updateWorkspaceAuthentication(array $args = [])
 * @method Promise updateWorkspaceAuthenticationAsync(array $args = [])
 * @method Result updateWorkspaceConfiguration(array $args = [])
 * @method Promise updateWorkspaceConfigurationAsync(array $args = [])
 */
class ManagedGrafanaClient extends AwsClient {}
