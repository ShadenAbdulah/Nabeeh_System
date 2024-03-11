<?php
namespace Aws\CodeGuruSecurity;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon CodeGuru Security** service.
 * @method Result batchGetFindings(array $args = [])
 * @method Promise batchGetFindingsAsync(array $args = [])
 * @method Result createScan(array $args = [])
 * @method Promise createScanAsync(array $args = [])
 * @method Result createUploadUrl(array $args = [])
 * @method Promise createUploadUrlAsync(array $args = [])
 * @method Result getAccountConfiguration(array $args = [])
 * @method Promise getAccountConfigurationAsync(array $args = [])
 * @method Result getFindings(array $args = [])
 * @method Promise getFindingsAsync(array $args = [])
 * @method Result getMetricsSummary(array $args = [])
 * @method Promise getMetricsSummaryAsync(array $args = [])
 * @method Result getScan(array $args = [])
 * @method Promise getScanAsync(array $args = [])
 * @method Result listFindingsMetrics(array $args = [])
 * @method Promise listFindingsMetricsAsync(array $args = [])
 * @method Result listScans(array $args = [])
 * @method Promise listScansAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAccountConfiguration(array $args = [])
 * @method Promise updateAccountConfigurationAsync(array $args = [])
 */
class CodeGuruSecurityClient extends AwsClient {}
