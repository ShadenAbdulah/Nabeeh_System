<?php
namespace Aws\MigrationHubRefactorSpaces;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Migration Hub Refactor Spaces** service.
 * @method Result createApplication(array $args = [])
 * @method Promise createApplicationAsync(array $args = [])
 * @method Result createEnvironment(array $args = [])
 * @method Promise createEnvironmentAsync(array $args = [])
 * @method Result createRoute(array $args = [])
 * @method Promise createRouteAsync(array $args = [])
 * @method Result createService(array $args = [])
 * @method Promise createServiceAsync(array $args = [])
 * @method Result deleteApplication(array $args = [])
 * @method Promise deleteApplicationAsync(array $args = [])
 * @method Result deleteEnvironment(array $args = [])
 * @method Promise deleteEnvironmentAsync(array $args = [])
 * @method Result deleteResourcePolicy(array $args = [])
 * @method Promise deleteResourcePolicyAsync(array $args = [])
 * @method Result deleteRoute(array $args = [])
 * @method Promise deleteRouteAsync(array $args = [])
 * @method Result deleteService(array $args = [])
 * @method Promise deleteServiceAsync(array $args = [])
 * @method Result getApplication(array $args = [])
 * @method Promise getApplicationAsync(array $args = [])
 * @method Result getEnvironment(array $args = [])
 * @method Promise getEnvironmentAsync(array $args = [])
 * @method Result getResourcePolicy(array $args = [])
 * @method Promise getResourcePolicyAsync(array $args = [])
 * @method Result getRoute(array $args = [])
 * @method Promise getRouteAsync(array $args = [])
 * @method Result getService(array $args = [])
 * @method Promise getServiceAsync(array $args = [])
 * @method Result listApplications(array $args = [])
 * @method Promise listApplicationsAsync(array $args = [])
 * @method Result listEnvironmentVpcs(array $args = [])
 * @method Promise listEnvironmentVpcsAsync(array $args = [])
 * @method Result listEnvironments(array $args = [])
 * @method Promise listEnvironmentsAsync(array $args = [])
 * @method Result listRoutes(array $args = [])
 * @method Promise listRoutesAsync(array $args = [])
 * @method Result listServices(array $args = [])
 * @method Promise listServicesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putResourcePolicy(array $args = [])
 * @method Promise putResourcePolicyAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateRoute(array $args = [])
 * @method Promise updateRouteAsync(array $args = [])
 */
class MigrationHubRefactorSpacesClient extends AwsClient {}
