<?php
namespace Aws\Bedrock;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Bedrock** service.
 * @method Result createModelCustomizationJob(array $args = [])
 * @method Promise createModelCustomizationJobAsync(array $args = [])
 * @method Result createProvisionedModelThroughput(array $args = [])
 * @method Promise createProvisionedModelThroughputAsync(array $args = [])
 * @method Result deleteCustomModel(array $args = [])
 * @method Promise deleteCustomModelAsync(array $args = [])
 * @method Result deleteModelInvocationLoggingConfiguration(array $args = [])
 * @method Promise deleteModelInvocationLoggingConfigurationAsync(array $args = [])
 * @method Result deleteProvisionedModelThroughput(array $args = [])
 * @method Promise deleteProvisionedModelThroughputAsync(array $args = [])
 * @method Result getCustomModel(array $args = [])
 * @method Promise getCustomModelAsync(array $args = [])
 * @method Result getFoundationModel(array $args = [])
 * @method Promise getFoundationModelAsync(array $args = [])
 * @method Result getModelCustomizationJob(array $args = [])
 * @method Promise getModelCustomizationJobAsync(array $args = [])
 * @method Result getModelInvocationLoggingConfiguration(array $args = [])
 * @method Promise getModelInvocationLoggingConfigurationAsync(array $args = [])
 * @method Result getProvisionedModelThroughput(array $args = [])
 * @method Promise getProvisionedModelThroughputAsync(array $args = [])
 * @method Result listCustomModels(array $args = [])
 * @method Promise listCustomModelsAsync(array $args = [])
 * @method Result listFoundationModels(array $args = [])
 * @method Promise listFoundationModelsAsync(array $args = [])
 * @method Result listModelCustomizationJobs(array $args = [])
 * @method Promise listModelCustomizationJobsAsync(array $args = [])
 * @method Result listProvisionedModelThroughputs(array $args = [])
 * @method Promise listProvisionedModelThroughputsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putModelInvocationLoggingConfiguration(array $args = [])
 * @method Promise putModelInvocationLoggingConfigurationAsync(array $args = [])
 * @method Result stopModelCustomizationJob(array $args = [])
 * @method Promise stopModelCustomizationJobAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateProvisionedModelThroughput(array $args = [])
 * @method Promise updateProvisionedModelThroughputAsync(array $args = [])
 */
class BedrockClient extends AwsClient {}
