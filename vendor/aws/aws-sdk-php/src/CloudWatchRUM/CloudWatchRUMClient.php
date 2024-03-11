<?php
namespace Aws\CloudWatchRUM;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **CloudWatch RUM** service.
 * @method Result batchCreateRumMetricDefinitions(array $args = [])
 * @method Promise batchCreateRumMetricDefinitionsAsync(array $args = [])
 * @method Result batchDeleteRumMetricDefinitions(array $args = [])
 * @method Promise batchDeleteRumMetricDefinitionsAsync(array $args = [])
 * @method Result batchGetRumMetricDefinitions(array $args = [])
 * @method Promise batchGetRumMetricDefinitionsAsync(array $args = [])
 * @method Result createAppMonitor(array $args = [])
 * @method Promise createAppMonitorAsync(array $args = [])
 * @method Result deleteAppMonitor(array $args = [])
 * @method Promise deleteAppMonitorAsync(array $args = [])
 * @method Result deleteRumMetricsDestination(array $args = [])
 * @method Promise deleteRumMetricsDestinationAsync(array $args = [])
 * @method Result getAppMonitor(array $args = [])
 * @method Promise getAppMonitorAsync(array $args = [])
 * @method Result getAppMonitorData(array $args = [])
 * @method Promise getAppMonitorDataAsync(array $args = [])
 * @method Result listAppMonitors(array $args = [])
 * @method Promise listAppMonitorsAsync(array $args = [])
 * @method Result listRumMetricsDestinations(array $args = [])
 * @method Promise listRumMetricsDestinationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putRumEvents(array $args = [])
 * @method Promise putRumEventsAsync(array $args = [])
 * @method Result putRumMetricsDestination(array $args = [])
 * @method Promise putRumMetricsDestinationAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAppMonitor(array $args = [])
 * @method Promise updateAppMonitorAsync(array $args = [])
 * @method Result updateRumMetricDefinition(array $args = [])
 * @method Promise updateRumMetricDefinitionAsync(array $args = [])
 */
class CloudWatchRUMClient extends AwsClient {}
