<?php
namespace Aws\IoTEventsData;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS IoT Events Data** service.
 * @method Result batchAcknowledgeAlarm(array $args = [])
 * @method Promise batchAcknowledgeAlarmAsync(array $args = [])
 * @method Result batchDeleteDetector(array $args = [])
 * @method Promise batchDeleteDetectorAsync(array $args = [])
 * @method Result batchDisableAlarm(array $args = [])
 * @method Promise batchDisableAlarmAsync(array $args = [])
 * @method Result batchEnableAlarm(array $args = [])
 * @method Promise batchEnableAlarmAsync(array $args = [])
 * @method Result batchPutMessage(array $args = [])
 * @method Promise batchPutMessageAsync(array $args = [])
 * @method Result batchResetAlarm(array $args = [])
 * @method Promise batchResetAlarmAsync(array $args = [])
 * @method Result batchSnoozeAlarm(array $args = [])
 * @method Promise batchSnoozeAlarmAsync(array $args = [])
 * @method Result batchUpdateDetector(array $args = [])
 * @method Promise batchUpdateDetectorAsync(array $args = [])
 * @method Result describeAlarm(array $args = [])
 * @method Promise describeAlarmAsync(array $args = [])
 * @method Result describeDetector(array $args = [])
 * @method Promise describeDetectorAsync(array $args = [])
 * @method Result listAlarms(array $args = [])
 * @method Promise listAlarmsAsync(array $args = [])
 * @method Result listDetectors(array $args = [])
 * @method Promise listDetectorsAsync(array $args = [])
 */
class IoTEventsDataClient extends AwsClient {}
