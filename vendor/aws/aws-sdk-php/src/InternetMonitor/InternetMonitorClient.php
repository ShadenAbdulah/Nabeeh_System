<?php
namespace Aws\InternetMonitor;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon CloudWatch Internet Monitor** service.
 * @method Result createMonitor(array $args = [])
 * @method Promise createMonitorAsync(array $args = [])
 * @method Result deleteMonitor(array $args = [])
 * @method Promise deleteMonitorAsync(array $args = [])
 * @method Result getHealthEvent(array $args = [])
 * @method Promise getHealthEventAsync(array $args = [])
 * @method Result getMonitor(array $args = [])
 * @method Promise getMonitorAsync(array $args = [])
 * @method Result getQueryResults(array $args = [])
 * @method Promise getQueryResultsAsync(array $args = [])
 * @method Result getQueryStatus(array $args = [])
 * @method Promise getQueryStatusAsync(array $args = [])
 * @method Result listHealthEvents(array $args = [])
 * @method Promise listHealthEventsAsync(array $args = [])
 * @method Result listMonitors(array $args = [])
 * @method Promise listMonitorsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startQuery(array $args = [])
 * @method Promise startQueryAsync(array $args = [])
 * @method Result stopQuery(array $args = [])
 * @method Promise stopQueryAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateMonitor(array $args = [])
 * @method Promise updateMonitorAsync(array $args = [])
 */
class InternetMonitorClient extends AwsClient {}
