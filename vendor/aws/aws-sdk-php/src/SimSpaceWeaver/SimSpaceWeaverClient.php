<?php
namespace Aws\SimSpaceWeaver;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS SimSpace Weaver** service.
 * @method Result createSnapshot(array $args = [])
 * @method Promise createSnapshotAsync(array $args = [])
 * @method Result deleteApp(array $args = [])
 * @method Promise deleteAppAsync(array $args = [])
 * @method Result deleteSimulation(array $args = [])
 * @method Promise deleteSimulationAsync(array $args = [])
 * @method Result describeApp(array $args = [])
 * @method Promise describeAppAsync(array $args = [])
 * @method Result describeSimulation(array $args = [])
 * @method Promise describeSimulationAsync(array $args = [])
 * @method Result listApps(array $args = [])
 * @method Promise listAppsAsync(array $args = [])
 * @method Result listSimulations(array $args = [])
 * @method Promise listSimulationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startApp(array $args = [])
 * @method Promise startAppAsync(array $args = [])
 * @method Result startClock(array $args = [])
 * @method Promise startClockAsync(array $args = [])
 * @method Result startSimulation(array $args = [])
 * @method Promise startSimulationAsync(array $args = [])
 * @method Result stopApp(array $args = [])
 * @method Promise stopAppAsync(array $args = [])
 * @method Result stopClock(array $args = [])
 * @method Promise stopClockAsync(array $args = [])
 * @method Result stopSimulation(array $args = [])
 * @method Promise stopSimulationAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class SimSpaceWeaverClient extends AwsClient {}
