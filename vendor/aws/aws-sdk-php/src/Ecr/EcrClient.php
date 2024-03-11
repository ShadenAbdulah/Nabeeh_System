<?php
namespace Aws\Ecr;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon EC2 Container Registry** service.
 *
 * @method Result batchCheckLayerAvailability(array $args = [])
 * @method Promise batchCheckLayerAvailabilityAsync(array $args = [])
 * @method Result batchDeleteImage(array $args = [])
 * @method Promise batchDeleteImageAsync(array $args = [])
 * @method Result batchGetImage(array $args = [])
 * @method Promise batchGetImageAsync(array $args = [])
 * @method Result batchGetRepositoryScanningConfiguration(array $args = [])
 * @method Promise batchGetRepositoryScanningConfigurationAsync(array $args = [])
 * @method Result completeLayerUpload(array $args = [])
 * @method Promise completeLayerUploadAsync(array $args = [])
 * @method Result createPullThroughCacheRule(array $args = [])
 * @method Promise createPullThroughCacheRuleAsync(array $args = [])
 * @method Result createRepository(array $args = [])
 * @method Promise createRepositoryAsync(array $args = [])
 * @method Result deleteLifecyclePolicy(array $args = [])
 * @method Promise deleteLifecyclePolicyAsync(array $args = [])
 * @method Result deletePullThroughCacheRule(array $args = [])
 * @method Promise deletePullThroughCacheRuleAsync(array $args = [])
 * @method Result deleteRegistryPolicy(array $args = [])
 * @method Promise deleteRegistryPolicyAsync(array $args = [])
 * @method Result deleteRepository(array $args = [])
 * @method Promise deleteRepositoryAsync(array $args = [])
 * @method Result deleteRepositoryPolicy(array $args = [])
 * @method Promise deleteRepositoryPolicyAsync(array $args = [])
 * @method Result describeImageReplicationStatus(array $args = [])
 * @method Promise describeImageReplicationStatusAsync(array $args = [])
 * @method Result describeImageScanFindings(array $args = [])
 * @method Promise describeImageScanFindingsAsync(array $args = [])
 * @method Result describeImages(array $args = [])
 * @method Promise describeImagesAsync(array $args = [])
 * @method Result describePullThroughCacheRules(array $args = [])
 * @method Promise describePullThroughCacheRulesAsync(array $args = [])
 * @method Result describeRegistry(array $args = [])
 * @method Promise describeRegistryAsync(array $args = [])
 * @method Result describeRepositories(array $args = [])
 * @method Promise describeRepositoriesAsync(array $args = [])
 * @method Result getAuthorizationToken(array $args = [])
 * @method Promise getAuthorizationTokenAsync(array $args = [])
 * @method Result getDownloadUrlForLayer(array $args = [])
 * @method Promise getDownloadUrlForLayerAsync(array $args = [])
 * @method Result getLifecyclePolicy(array $args = [])
 * @method Promise getLifecyclePolicyAsync(array $args = [])
 * @method Result getLifecyclePolicyPreview(array $args = [])
 * @method Promise getLifecyclePolicyPreviewAsync(array $args = [])
 * @method Result getRegistryPolicy(array $args = [])
 * @method Promise getRegistryPolicyAsync(array $args = [])
 * @method Result getRegistryScanningConfiguration(array $args = [])
 * @method Promise getRegistryScanningConfigurationAsync(array $args = [])
 * @method Result getRepositoryPolicy(array $args = [])
 * @method Promise getRepositoryPolicyAsync(array $args = [])
 * @method Result initiateLayerUpload(array $args = [])
 * @method Promise initiateLayerUploadAsync(array $args = [])
 * @method Result listImages(array $args = [])
 * @method Promise listImagesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putImage(array $args = [])
 * @method Promise putImageAsync(array $args = [])
 * @method Result putImageScanningConfiguration(array $args = [])
 * @method Promise putImageScanningConfigurationAsync(array $args = [])
 * @method Result putImageTagMutability(array $args = [])
 * @method Promise putImageTagMutabilityAsync(array $args = [])
 * @method Result putLifecyclePolicy(array $args = [])
 * @method Promise putLifecyclePolicyAsync(array $args = [])
 * @method Result putRegistryPolicy(array $args = [])
 * @method Promise putRegistryPolicyAsync(array $args = [])
 * @method Result putRegistryScanningConfiguration(array $args = [])
 * @method Promise putRegistryScanningConfigurationAsync(array $args = [])
 * @method Result putReplicationConfiguration(array $args = [])
 * @method Promise putReplicationConfigurationAsync(array $args = [])
 * @method Result setRepositoryPolicy(array $args = [])
 * @method Promise setRepositoryPolicyAsync(array $args = [])
 * @method Result startImageScan(array $args = [])
 * @method Promise startImageScanAsync(array $args = [])
 * @method Result startLifecyclePolicyPreview(array $args = [])
 * @method Promise startLifecyclePolicyPreviewAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updatePullThroughCacheRule(array $args = [])
 * @method Promise updatePullThroughCacheRuleAsync(array $args = [])
 * @method Result uploadLayerPart(array $args = [])
 * @method Promise uploadLayerPartAsync(array $args = [])
 * @method Result validatePullThroughCacheRule(array $args = [])
 * @method Promise validatePullThroughCacheRuleAsync(array $args = [])
 */
class EcrClient extends AwsClient {}
