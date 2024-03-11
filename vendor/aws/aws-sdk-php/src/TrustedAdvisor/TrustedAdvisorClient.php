<?php
namespace Aws\TrustedAdvisor;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **TrustedAdvisor Public API** service.
 * @method Result getOrganizationRecommendation(array $args = [])
 * @method Promise getOrganizationRecommendationAsync(array $args = [])
 * @method Result getRecommendation(array $args = [])
 * @method Promise getRecommendationAsync(array $args = [])
 * @method Result listChecks(array $args = [])
 * @method Promise listChecksAsync(array $args = [])
 * @method Result listOrganizationRecommendationAccounts(array $args = [])
 * @method Promise listOrganizationRecommendationAccountsAsync(array $args = [])
 * @method Result listOrganizationRecommendationResources(array $args = [])
 * @method Promise listOrganizationRecommendationResourcesAsync(array $args = [])
 * @method Result listOrganizationRecommendations(array $args = [])
 * @method Promise listOrganizationRecommendationsAsync(array $args = [])
 * @method Result listRecommendationResources(array $args = [])
 * @method Promise listRecommendationResourcesAsync(array $args = [])
 * @method Result listRecommendations(array $args = [])
 * @method Promise listRecommendationsAsync(array $args = [])
 * @method Result updateOrganizationRecommendationLifecycle(array $args = [])
 * @method Promise updateOrganizationRecommendationLifecycleAsync(array $args = [])
 * @method Result updateRecommendationLifecycle(array $args = [])
 * @method Promise updateRecommendationLifecycleAsync(array $args = [])
 */
class TrustedAdvisorClient extends AwsClient {}
