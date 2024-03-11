<?php
namespace Aws\AppIntegrationsService;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon AppIntegrations Service** service.
 * @method Result createApplication(array $args = [])
 * @method Promise createApplicationAsync(array $args = [])
 * @method Result createDataIntegration(array $args = [])
 * @method Promise createDataIntegrationAsync(array $args = [])
 * @method Result createEventIntegration(array $args = [])
 * @method Promise createEventIntegrationAsync(array $args = [])
 * @method Result deleteApplication(array $args = [])
 * @method Promise deleteApplicationAsync(array $args = [])
 * @method Result deleteDataIntegration(array $args = [])
 * @method Promise deleteDataIntegrationAsync(array $args = [])
 * @method Result deleteEventIntegration(array $args = [])
 * @method Promise deleteEventIntegrationAsync(array $args = [])
 * @method Result getApplication(array $args = [])
 * @method Promise getApplicationAsync(array $args = [])
 * @method Result getDataIntegration(array $args = [])
 * @method Promise getDataIntegrationAsync(array $args = [])
 * @method Result getEventIntegration(array $args = [])
 * @method Promise getEventIntegrationAsync(array $args = [])
 * @method Result listApplicationAssociations(array $args = [])
 * @method Promise listApplicationAssociationsAsync(array $args = [])
 * @method Result listApplications(array $args = [])
 * @method Promise listApplicationsAsync(array $args = [])
 * @method Result listDataIntegrationAssociations(array $args = [])
 * @method Promise listDataIntegrationAssociationsAsync(array $args = [])
 * @method Result listDataIntegrations(array $args = [])
 * @method Promise listDataIntegrationsAsync(array $args = [])
 * @method Result listEventIntegrationAssociations(array $args = [])
 * @method Promise listEventIntegrationAssociationsAsync(array $args = [])
 * @method Result listEventIntegrations(array $args = [])
 * @method Promise listEventIntegrationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateApplication(array $args = [])
 * @method Promise updateApplicationAsync(array $args = [])
 * @method Result updateDataIntegration(array $args = [])
 * @method Promise updateDataIntegrationAsync(array $args = [])
 * @method Result updateEventIntegration(array $args = [])
 * @method Promise updateEventIntegrationAsync(array $args = [])
 */
class AppIntegrationsServiceClient extends AwsClient {}
