<?php
namespace Aws\AutoScalingPlans;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Auto Scaling Plans** service.
 * @method Result createScalingPlan(array $args = [])
 * @method Promise createScalingPlanAsync(array $args = [])
 * @method Result deleteScalingPlan(array $args = [])
 * @method Promise deleteScalingPlanAsync(array $args = [])
 * @method Result describeScalingPlanResources(array $args = [])
 * @method Promise describeScalingPlanResourcesAsync(array $args = [])
 * @method Result describeScalingPlans(array $args = [])
 * @method Promise describeScalingPlansAsync(array $args = [])
 * @method Result getScalingPlanResourceForecastData(array $args = [])
 * @method Promise getScalingPlanResourceForecastDataAsync(array $args = [])
 * @method Result updateScalingPlan(array $args = [])
 * @method Promise updateScalingPlanAsync(array $args = [])
 */
class AutoScalingPlansClient extends AwsClient {}
