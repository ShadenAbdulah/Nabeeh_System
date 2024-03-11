<?php
namespace Aws\IoT1ClickProjects;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS IoT 1-Click Projects Service** service.
 * @method Result associateDeviceWithPlacement(array $args = [])
 * @method Promise associateDeviceWithPlacementAsync(array $args = [])
 * @method Result createPlacement(array $args = [])
 * @method Promise createPlacementAsync(array $args = [])
 * @method Result createProject(array $args = [])
 * @method Promise createProjectAsync(array $args = [])
 * @method Result deletePlacement(array $args = [])
 * @method Promise deletePlacementAsync(array $args = [])
 * @method Result deleteProject(array $args = [])
 * @method Promise deleteProjectAsync(array $args = [])
 * @method Result describePlacement(array $args = [])
 * @method Promise describePlacementAsync(array $args = [])
 * @method Result describeProject(array $args = [])
 * @method Promise describeProjectAsync(array $args = [])
 * @method Result disassociateDeviceFromPlacement(array $args = [])
 * @method Promise disassociateDeviceFromPlacementAsync(array $args = [])
 * @method Result getDevicesInPlacement(array $args = [])
 * @method Promise getDevicesInPlacementAsync(array $args = [])
 * @method Result listPlacements(array $args = [])
 * @method Promise listPlacementsAsync(array $args = [])
 * @method Result listProjects(array $args = [])
 * @method Promise listProjectsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updatePlacement(array $args = [])
 * @method Promise updatePlacementAsync(array $args = [])
 * @method Result updateProject(array $args = [])
 * @method Promise updateProjectAsync(array $args = [])
 */
class IoT1ClickProjectsClient extends AwsClient {}
