<?php
namespace Aws\ResourceGroupsTaggingAPI;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Resource Groups Tagging API** service.
 * @method Result describeReportCreation(array $args = [])
 * @method Promise describeReportCreationAsync(array $args = [])
 * @method Result getComplianceSummary(array $args = [])
 * @method Promise getComplianceSummaryAsync(array $args = [])
 * @method Result getResources(array $args = [])
 * @method Promise getResourcesAsync(array $args = [])
 * @method Result getTagKeys(array $args = [])
 * @method Promise getTagKeysAsync(array $args = [])
 * @method Result getTagValues(array $args = [])
 * @method Promise getTagValuesAsync(array $args = [])
 * @method Result startReportCreation(array $args = [])
 * @method Promise startReportCreationAsync(array $args = [])
 * @method Result tagResources(array $args = [])
 * @method Promise tagResourcesAsync(array $args = [])
 * @method Result untagResources(array $args = [])
 * @method Promise untagResourcesAsync(array $args = [])
 */
class ResourceGroupsTaggingAPIClient extends AwsClient {}
