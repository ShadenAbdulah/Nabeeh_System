<?php
namespace Aws\PI;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Performance Insights** service.
 * @method Result createPerformanceAnalysisReport(array $args = [])
 * @method Promise createPerformanceAnalysisReportAsync(array $args = [])
 * @method Result deletePerformanceAnalysisReport(array $args = [])
 * @method Promise deletePerformanceAnalysisReportAsync(array $args = [])
 * @method Result describeDimensionKeys(array $args = [])
 * @method Promise describeDimensionKeysAsync(array $args = [])
 * @method Result getDimensionKeyDetails(array $args = [])
 * @method Promise getDimensionKeyDetailsAsync(array $args = [])
 * @method Result getPerformanceAnalysisReport(array $args = [])
 * @method Promise getPerformanceAnalysisReportAsync(array $args = [])
 * @method Result getResourceMetadata(array $args = [])
 * @method Promise getResourceMetadataAsync(array $args = [])
 * @method Result getResourceMetrics(array $args = [])
 * @method Promise getResourceMetricsAsync(array $args = [])
 * @method Result listAvailableResourceDimensions(array $args = [])
 * @method Promise listAvailableResourceDimensionsAsync(array $args = [])
 * @method Result listAvailableResourceMetrics(array $args = [])
 * @method Promise listAvailableResourceMetricsAsync(array $args = [])
 * @method Result listPerformanceAnalysisReports(array $args = [])
 * @method Promise listPerformanceAnalysisReportsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class PIClient extends AwsClient {}
