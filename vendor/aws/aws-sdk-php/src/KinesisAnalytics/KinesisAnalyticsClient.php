<?php
namespace Aws\KinesisAnalytics;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Kinesis Analytics** service.
 * @method Result addApplicationCloudWatchLoggingOption(array $args = [])
 * @method Promise addApplicationCloudWatchLoggingOptionAsync(array $args = [])
 * @method Result addApplicationInput(array $args = [])
 * @method Promise addApplicationInputAsync(array $args = [])
 * @method Result addApplicationInputProcessingConfiguration(array $args = [])
 * @method Promise addApplicationInputProcessingConfigurationAsync(array $args = [])
 * @method Result addApplicationOutput(array $args = [])
 * @method Promise addApplicationOutputAsync(array $args = [])
 * @method Result addApplicationReferenceDataSource(array $args = [])
 * @method Promise addApplicationReferenceDataSourceAsync(array $args = [])
 * @method Result createApplication(array $args = [])
 * @method Promise createApplicationAsync(array $args = [])
 * @method Result deleteApplication(array $args = [])
 * @method Promise deleteApplicationAsync(array $args = [])
 * @method Result deleteApplicationCloudWatchLoggingOption(array $args = [])
 * @method Promise deleteApplicationCloudWatchLoggingOptionAsync(array $args = [])
 * @method Result deleteApplicationInputProcessingConfiguration(array $args = [])
 * @method Promise deleteApplicationInputProcessingConfigurationAsync(array $args = [])
 * @method Result deleteApplicationOutput(array $args = [])
 * @method Promise deleteApplicationOutputAsync(array $args = [])
 * @method Result deleteApplicationReferenceDataSource(array $args = [])
 * @method Promise deleteApplicationReferenceDataSourceAsync(array $args = [])
 * @method Result describeApplication(array $args = [])
 * @method Promise describeApplicationAsync(array $args = [])
 * @method Result discoverInputSchema(array $args = [])
 * @method Promise discoverInputSchemaAsync(array $args = [])
 * @method Result listApplications(array $args = [])
 * @method Promise listApplicationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startApplication(array $args = [])
 * @method Promise startApplicationAsync(array $args = [])
 * @method Result stopApplication(array $args = [])
 * @method Promise stopApplicationAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateApplication(array $args = [])
 * @method Promise updateApplicationAsync(array $args = [])
 */
class KinesisAnalyticsClient extends AwsClient {}
