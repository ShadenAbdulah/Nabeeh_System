<?php
namespace Aws\CostOptimizationHub;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Cost Optimization Hub** service.
 * @method Result getPreferences(array $args = [])
 * @method Promise getPreferencesAsync(array $args = [])
 * @method Result getRecommendation(array $args = [])
 * @method Promise getRecommendationAsync(array $args = [])
 * @method Result listEnrollmentStatuses(array $args = [])
 * @method Promise listEnrollmentStatusesAsync(array $args = [])
 * @method Result listRecommendationSummaries(array $args = [])
 * @method Promise listRecommendationSummariesAsync(array $args = [])
 * @method Result listRecommendations(array $args = [])
 * @method Promise listRecommendationsAsync(array $args = [])
 * @method Result updateEnrollmentStatus(array $args = [])
 * @method Promise updateEnrollmentStatusAsync(array $args = [])
 * @method Result updatePreferences(array $args = [])
 * @method Promise updatePreferencesAsync(array $args = [])
 */
class CostOptimizationHubClient extends AwsClient {}
