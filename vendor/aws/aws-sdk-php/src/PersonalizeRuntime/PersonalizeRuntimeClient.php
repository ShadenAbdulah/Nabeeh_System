<?php
namespace Aws\PersonalizeRuntime;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Personalize Runtime** service.
 * @method Result getActionRecommendations(array $args = [])
 * @method Promise getActionRecommendationsAsync(array $args = [])
 * @method Result getPersonalizedRanking(array $args = [])
 * @method Promise getPersonalizedRankingAsync(array $args = [])
 * @method Result getRecommendations(array $args = [])
 * @method Promise getRecommendationsAsync(array $args = [])
 */
class PersonalizeRuntimeClient extends AwsClient {}
