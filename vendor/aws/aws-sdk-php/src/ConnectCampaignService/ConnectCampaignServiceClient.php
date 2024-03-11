<?php
namespace Aws\ConnectCampaignService;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AmazonConnectCampaignService** service.
 * @method Result createCampaign(array $args = [])
 * @method Promise createCampaignAsync(array $args = [])
 * @method Result deleteCampaign(array $args = [])
 * @method Promise deleteCampaignAsync(array $args = [])
 * @method Result deleteConnectInstanceConfig(array $args = [])
 * @method Promise deleteConnectInstanceConfigAsync(array $args = [])
 * @method Result deleteInstanceOnboardingJob(array $args = [])
 * @method Promise deleteInstanceOnboardingJobAsync(array $args = [])
 * @method Result describeCampaign(array $args = [])
 * @method Promise describeCampaignAsync(array $args = [])
 * @method Result getCampaignState(array $args = [])
 * @method Promise getCampaignStateAsync(array $args = [])
 * @method Result getCampaignStateBatch(array $args = [])
 * @method Promise getCampaignStateBatchAsync(array $args = [])
 * @method Result getConnectInstanceConfig(array $args = [])
 * @method Promise getConnectInstanceConfigAsync(array $args = [])
 * @method Result getInstanceOnboardingJobStatus(array $args = [])
 * @method Promise getInstanceOnboardingJobStatusAsync(array $args = [])
 * @method Result listCampaigns(array $args = [])
 * @method Promise listCampaignsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result pauseCampaign(array $args = [])
 * @method Promise pauseCampaignAsync(array $args = [])
 * @method Result putDialRequestBatch(array $args = [])
 * @method Promise putDialRequestBatchAsync(array $args = [])
 * @method Result resumeCampaign(array $args = [])
 * @method Promise resumeCampaignAsync(array $args = [])
 * @method Result startCampaign(array $args = [])
 * @method Promise startCampaignAsync(array $args = [])
 * @method Result startInstanceOnboardingJob(array $args = [])
 * @method Promise startInstanceOnboardingJobAsync(array $args = [])
 * @method Result stopCampaign(array $args = [])
 * @method Promise stopCampaignAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateCampaignDialerConfig(array $args = [])
 * @method Promise updateCampaignDialerConfigAsync(array $args = [])
 * @method Result updateCampaignName(array $args = [])
 * @method Promise updateCampaignNameAsync(array $args = [])
 * @method Result updateCampaignOutboundCallConfig(array $args = [])
 * @method Promise updateCampaignOutboundCallConfigAsync(array $args = [])
 */
class ConnectCampaignServiceClient extends AwsClient {}
