<?php
namespace Aws\NetworkMonitor;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon CloudWatch Network Monitor** service.
 * @method Result createMonitor(array $args = [])
 * @method Promise createMonitorAsync(array $args = [])
 * @method Result createProbe(array $args = [])
 * @method Promise createProbeAsync(array $args = [])
 * @method Result deleteMonitor(array $args = [])
 * @method Promise deleteMonitorAsync(array $args = [])
 * @method Result deleteProbe(array $args = [])
 * @method Promise deleteProbeAsync(array $args = [])
 * @method Result getMonitor(array $args = [])
 * @method Promise getMonitorAsync(array $args = [])
 * @method Result getProbe(array $args = [])
 * @method Promise getProbeAsync(array $args = [])
 * @method Result listMonitors(array $args = [])
 * @method Promise listMonitorsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateMonitor(array $args = [])
 * @method Promise updateMonitorAsync(array $args = [])
 * @method Result updateProbe(array $args = [])
 * @method Promise updateProbeAsync(array $args = [])
 */
class NetworkMonitorClient extends AwsClient {}
