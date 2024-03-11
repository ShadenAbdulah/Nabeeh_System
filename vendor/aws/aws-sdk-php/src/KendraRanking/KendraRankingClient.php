<?php
namespace Aws\KendraRanking;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Kendra Intelligent Ranking** service.
 * @method Result createRescoreExecutionPlan(array $args = [])
 * @method Promise createRescoreExecutionPlanAsync(array $args = [])
 * @method Result deleteRescoreExecutionPlan(array $args = [])
 * @method Promise deleteRescoreExecutionPlanAsync(array $args = [])
 * @method Result describeRescoreExecutionPlan(array $args = [])
 * @method Promise describeRescoreExecutionPlanAsync(array $args = [])
 * @method Result listRescoreExecutionPlans(array $args = [])
 * @method Promise listRescoreExecutionPlansAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result rescore(array $args = [])
 * @method Promise rescoreAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateRescoreExecutionPlan(array $args = [])
 * @method Promise updateRescoreExecutionPlanAsync(array $args = [])
 */
class KendraRankingClient extends AwsClient {}
