<?php
namespace Aws\ComputeOptimizer;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Compute Optimizer** service.
 * @method Result deleteRecommendationPreferences(array $args = [])
 * @method Promise deleteRecommendationPreferencesAsync(array $args = [])
 * @method Result describeRecommendationExportJobs(array $args = [])
 * @method Promise describeRecommendationExportJobsAsync(array $args = [])
 * @method Result exportAutoScalingGroupRecommendations(array $args = [])
 * @method Promise exportAutoScalingGroupRecommendationsAsync(array $args = [])
 * @method Result exportEBSVolumeRecommendations(array $args = [])
 * @method Promise exportEBSVolumeRecommendationsAsync(array $args = [])
 * @method Result exportEC2InstanceRecommendations(array $args = [])
 * @method Promise exportEC2InstanceRecommendationsAsync(array $args = [])
 * @method Result exportECSServiceRecommendations(array $args = [])
 * @method Promise exportECSServiceRecommendationsAsync(array $args = [])
 * @method Result exportLambdaFunctionRecommendations(array $args = [])
 * @method Promise exportLambdaFunctionRecommendationsAsync(array $args = [])
 * @method Result exportLicenseRecommendations(array $args = [])
 * @method Promise exportLicenseRecommendationsAsync(array $args = [])
 * @method Result getAutoScalingGroupRecommendations(array $args = [])
 * @method Promise getAutoScalingGroupRecommendationsAsync(array $args = [])
 * @method Result getEBSVolumeRecommendations(array $args = [])
 * @method Promise getEBSVolumeRecommendationsAsync(array $args = [])
 * @method Result getEC2InstanceRecommendations(array $args = [])
 * @method Promise getEC2InstanceRecommendationsAsync(array $args = [])
 * @method Result getEC2RecommendationProjectedMetrics(array $args = [])
 * @method Promise getEC2RecommendationProjectedMetricsAsync(array $args = [])
 * @method Result getECSServiceRecommendationProjectedMetrics(array $args = [])
 * @method Promise getECSServiceRecommendationProjectedMetricsAsync(array $args = [])
 * @method Result getECSServiceRecommendations(array $args = [])
 * @method Promise getECSServiceRecommendationsAsync(array $args = [])
 * @method Result getEffectiveRecommendationPreferences(array $args = [])
 * @method Promise getEffectiveRecommendationPreferencesAsync(array $args = [])
 * @method Result getEnrollmentStatus(array $args = [])
 * @method Promise getEnrollmentStatusAsync(array $args = [])
 * @method Result getEnrollmentStatusesForOrganization(array $args = [])
 * @method Promise getEnrollmentStatusesForOrganizationAsync(array $args = [])
 * @method Result getLambdaFunctionRecommendations(array $args = [])
 * @method Promise getLambdaFunctionRecommendationsAsync(array $args = [])
 * @method Result getLicenseRecommendations(array $args = [])
 * @method Promise getLicenseRecommendationsAsync(array $args = [])
 * @method Result getRecommendationPreferences(array $args = [])
 * @method Promise getRecommendationPreferencesAsync(array $args = [])
 * @method Result getRecommendationSummaries(array $args = [])
 * @method Promise getRecommendationSummariesAsync(array $args = [])
 * @method Result putRecommendationPreferences(array $args = [])
 * @method Promise putRecommendationPreferencesAsync(array $args = [])
 * @method Result updateEnrollmentStatus(array $args = [])
 * @method Promise updateEnrollmentStatusAsync(array $args = [])
 */
class ComputeOptimizerClient extends AwsClient {}
