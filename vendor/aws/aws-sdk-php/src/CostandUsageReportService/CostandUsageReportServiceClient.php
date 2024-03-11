<?php
namespace Aws\CostandUsageReportService;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Cost and Usage Report Service** service.
 * @method Result deleteReportDefinition(array $args = [])
 * @method Promise deleteReportDefinitionAsync(array $args = [])
 * @method Result describeReportDefinitions(array $args = [])
 * @method Promise describeReportDefinitionsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result modifyReportDefinition(array $args = [])
 * @method Promise modifyReportDefinitionAsync(array $args = [])
 * @method Result putReportDefinition(array $args = [])
 * @method Promise putReportDefinitionAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class CostandUsageReportServiceClient extends AwsClient {}
