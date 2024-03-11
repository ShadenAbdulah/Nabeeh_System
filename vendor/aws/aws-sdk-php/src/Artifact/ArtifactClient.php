<?php

namespace Aws\Artifact;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Artifact** service.
 * @method Result getAccountSettings(array $args = [])
 * @method Promise getAccountSettingsAsync(array $args = [])
 * @method Result getReport(array $args = [])
 * @method Promise getReportAsync(array $args = [])
 * @method Result getReportMetadata(array $args = [])
 * @method Promise getReportMetadataAsync(array $args = [])
 * @method Result getTermForReport(array $args = [])
 * @method Promise getTermForReportAsync(array $args = [])
 * @method Result listReports(array $args = [])
 * @method Promise listReportsAsync(array $args = [])
 * @method Result putAccountSettings(array $args = [])
 * @method Promise putAccountSettingsAsync(array $args = [])
 */
class ArtifactClient extends AwsClient
{
}
