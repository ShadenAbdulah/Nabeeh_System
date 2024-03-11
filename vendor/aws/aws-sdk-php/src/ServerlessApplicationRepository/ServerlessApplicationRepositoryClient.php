<?php
namespace Aws\ServerlessApplicationRepository;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWSServerlessApplicationRepository** service.
 * @method Result createApplication(array $args = [])
 * @method Promise createApplicationAsync(array $args = [])
 * @method Result createApplicationVersion(array $args = [])
 * @method Promise createApplicationVersionAsync(array $args = [])
 * @method Result createCloudFormationChangeSet(array $args = [])
 * @method Promise createCloudFormationChangeSetAsync(array $args = [])
 * @method Result createCloudFormationTemplate(array $args = [])
 * @method Promise createCloudFormationTemplateAsync(array $args = [])
 * @method Result deleteApplication(array $args = [])
 * @method Promise deleteApplicationAsync(array $args = [])
 * @method Result getApplication(array $args = [])
 * @method Promise getApplicationAsync(array $args = [])
 * @method Result getApplicationPolicy(array $args = [])
 * @method Promise getApplicationPolicyAsync(array $args = [])
 * @method Result getCloudFormationTemplate(array $args = [])
 * @method Promise getCloudFormationTemplateAsync(array $args = [])
 * @method Result listApplicationDependencies(array $args = [])
 * @method Promise listApplicationDependenciesAsync(array $args = [])
 * @method Result listApplicationVersions(array $args = [])
 * @method Promise listApplicationVersionsAsync(array $args = [])
 * @method Result listApplications(array $args = [])
 * @method Promise listApplicationsAsync(array $args = [])
 * @method Result putApplicationPolicy(array $args = [])
 * @method Promise putApplicationPolicyAsync(array $args = [])
 * @method Result unshareApplication(array $args = [])
 * @method Promise unshareApplicationAsync(array $args = [])
 * @method Result updateApplication(array $args = [])
 * @method Promise updateApplicationAsync(array $args = [])
 */
class ServerlessApplicationRepositoryClient extends AwsClient {}
