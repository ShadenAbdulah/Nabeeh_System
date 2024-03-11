<?php
namespace Aws\SnowDeviceManagement;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Snow Device Management** service.
 * @method Result cancelTask(array $args = [])
 * @method Promise cancelTaskAsync(array $args = [])
 * @method Result createTask(array $args = [])
 * @method Promise createTaskAsync(array $args = [])
 * @method Result describeDevice(array $args = [])
 * @method Promise describeDeviceAsync(array $args = [])
 * @method Result describeDeviceEc2Instances(array $args = [])
 * @method Promise describeDeviceEc2InstancesAsync(array $args = [])
 * @method Result describeExecution(array $args = [])
 * @method Promise describeExecutionAsync(array $args = [])
 * @method Result describeTask(array $args = [])
 * @method Promise describeTaskAsync(array $args = [])
 * @method Result listDeviceResources(array $args = [])
 * @method Promise listDeviceResourcesAsync(array $args = [])
 * @method Result listDevices(array $args = [])
 * @method Promise listDevicesAsync(array $args = [])
 * @method Result listExecutions(array $args = [])
 * @method Promise listExecutionsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTasks(array $args = [])
 * @method Promise listTasksAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class SnowDeviceManagementClient extends AwsClient {}
