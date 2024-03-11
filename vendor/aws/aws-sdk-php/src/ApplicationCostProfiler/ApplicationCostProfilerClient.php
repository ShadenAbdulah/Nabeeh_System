<?php
namespace Aws\ApplicationCostProfiler;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Application Cost Profiler** service.
 * @method Result deleteReportDefinition(array $args = [])
 * @method Promise deleteReportDefinitionAsync(array $args = [])
 * @method Result getReportDefinition(array $args = [])
 * @method Promise getReportDefinitionAsync(array $args = [])
 * @method Result importApplicationUsage(array $args = [])
 * @method Promise importApplicationUsageAsync(array $args = [])
 * @method Result listReportDefinitions(array $args = [])
 * @method Promise listReportDefinitionsAsync(array $args = [])
 * @method Result putReportDefinition(array $args = [])
 * @method Promise putReportDefinitionAsync(array $args = [])
 * @method Result updateReportDefinition(array $args = [])
 * @method Promise updateReportDefinitionAsync(array $args = [])
 */
class ApplicationCostProfilerClient extends AwsClient {}
