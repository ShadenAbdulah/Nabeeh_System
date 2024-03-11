<?php
namespace Aws\IoTRoboRunner;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS IoT RoboRunner** service.
 * @method Result createDestination(array $args = [])
 * @method Promise createDestinationAsync(array $args = [])
 * @method Result createSite(array $args = [])
 * @method Promise createSiteAsync(array $args = [])
 * @method Result createWorker(array $args = [])
 * @method Promise createWorkerAsync(array $args = [])
 * @method Result createWorkerFleet(array $args = [])
 * @method Promise createWorkerFleetAsync(array $args = [])
 * @method Result deleteDestination(array $args = [])
 * @method Promise deleteDestinationAsync(array $args = [])
 * @method Result deleteSite(array $args = [])
 * @method Promise deleteSiteAsync(array $args = [])
 * @method Result deleteWorker(array $args = [])
 * @method Promise deleteWorkerAsync(array $args = [])
 * @method Result deleteWorkerFleet(array $args = [])
 * @method Promise deleteWorkerFleetAsync(array $args = [])
 * @method Result getDestination(array $args = [])
 * @method Promise getDestinationAsync(array $args = [])
 * @method Result getSite(array $args = [])
 * @method Promise getSiteAsync(array $args = [])
 * @method Result getWorker(array $args = [])
 * @method Promise getWorkerAsync(array $args = [])
 * @method Result getWorkerFleet(array $args = [])
 * @method Promise getWorkerFleetAsync(array $args = [])
 * @method Result listDestinations(array $args = [])
 * @method Promise listDestinationsAsync(array $args = [])
 * @method Result listSites(array $args = [])
 * @method Promise listSitesAsync(array $args = [])
 * @method Result listWorkerFleets(array $args = [])
 * @method Promise listWorkerFleetsAsync(array $args = [])
 * @method Result listWorkers(array $args = [])
 * @method Promise listWorkersAsync(array $args = [])
 * @method Result updateDestination(array $args = [])
 * @method Promise updateDestinationAsync(array $args = [])
 * @method Result updateSite(array $args = [])
 * @method Promise updateSiteAsync(array $args = [])
 * @method Result updateWorker(array $args = [])
 * @method Promise updateWorkerAsync(array $args = [])
 * @method Result updateWorkerFleet(array $args = [])
 * @method Promise updateWorkerFleetAsync(array $args = [])
 */
class IoTRoboRunnerClient extends AwsClient {}
