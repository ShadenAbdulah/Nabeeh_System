<?php
namespace Aws\Scheduler;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon EventBridge Scheduler** service.
 * @method Result createSchedule(array $args = [])
 * @method Promise createScheduleAsync(array $args = [])
 * @method Result createScheduleGroup(array $args = [])
 * @method Promise createScheduleGroupAsync(array $args = [])
 * @method Result deleteSchedule(array $args = [])
 * @method Promise deleteScheduleAsync(array $args = [])
 * @method Result deleteScheduleGroup(array $args = [])
 * @method Promise deleteScheduleGroupAsync(array $args = [])
 * @method Result getSchedule(array $args = [])
 * @method Promise getScheduleAsync(array $args = [])
 * @method Result getScheduleGroup(array $args = [])
 * @method Promise getScheduleGroupAsync(array $args = [])
 * @method Result listScheduleGroups(array $args = [])
 * @method Promise listScheduleGroupsAsync(array $args = [])
 * @method Result listSchedules(array $args = [])
 * @method Promise listSchedulesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateSchedule(array $args = [])
 * @method Promise updateScheduleAsync(array $args = [])
 */
class SchedulerClient extends AwsClient {}
