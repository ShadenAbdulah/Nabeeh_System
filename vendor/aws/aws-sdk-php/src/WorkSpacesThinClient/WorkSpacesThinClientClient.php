<?php
namespace Aws\WorkSpacesThinClient;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon WorkSpaces Thin Client** service.
 * @method Result createEnvironment(array $args = [])
 * @method Promise createEnvironmentAsync(array $args = [])
 * @method Result deleteDevice(array $args = [])
 * @method Promise deleteDeviceAsync(array $args = [])
 * @method Result deleteEnvironment(array $args = [])
 * @method Promise deleteEnvironmentAsync(array $args = [])
 * @method Result deregisterDevice(array $args = [])
 * @method Promise deregisterDeviceAsync(array $args = [])
 * @method Result getDevice(array $args = [])
 * @method Promise getDeviceAsync(array $args = [])
 * @method Result getEnvironment(array $args = [])
 * @method Promise getEnvironmentAsync(array $args = [])
 * @method Result getSoftwareSet(array $args = [])
 * @method Promise getSoftwareSetAsync(array $args = [])
 * @method Result listDevices(array $args = [])
 * @method Promise listDevicesAsync(array $args = [])
 * @method Result listEnvironments(array $args = [])
 * @method Promise listEnvironmentsAsync(array $args = [])
 * @method Result listSoftwareSets(array $args = [])
 * @method Promise listSoftwareSetsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateDevice(array $args = [])
 * @method Promise updateDeviceAsync(array $args = [])
 * @method Result updateEnvironment(array $args = [])
 * @method Promise updateEnvironmentAsync(array $args = [])
 * @method Result updateSoftwareSet(array $args = [])
 * @method Promise updateSoftwareSetAsync(array $args = [])
 */
class WorkSpacesThinClientClient extends AwsClient {}
