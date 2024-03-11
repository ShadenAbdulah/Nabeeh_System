<?php
namespace Aws\MWAA;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AmazonMWAA** service.
 * @method Result createCliToken(array $args = [])
 * @method Promise createCliTokenAsync(array $args = [])
 * @method Result createEnvironment(array $args = [])
 * @method Promise createEnvironmentAsync(array $args = [])
 * @method Result createWebLoginToken(array $args = [])
 * @method Promise createWebLoginTokenAsync(array $args = [])
 * @method Result deleteEnvironment(array $args = [])
 * @method Promise deleteEnvironmentAsync(array $args = [])
 * @method Result getEnvironment(array $args = [])
 * @method Promise getEnvironmentAsync(array $args = [])
 * @method Result listEnvironments(array $args = [])
 * @method Promise listEnvironmentsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result publishMetrics(array $args = [])
 * @method Promise publishMetricsAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateEnvironment(array $args = [])
 * @method Promise updateEnvironmentAsync(array $args = [])
 */
class MWAAClient extends AwsClient {}
