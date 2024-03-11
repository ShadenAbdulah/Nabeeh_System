<?php
namespace Aws\ApplicationAutoScaling;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Application Auto Scaling** service.
 * @method Result deleteScalingPolicy(array $args = [])
 * @method Promise deleteScalingPolicyAsync(array $args = [])
 * @method Result deleteScheduledAction(array $args = [])
 * @method Promise deleteScheduledActionAsync(array $args = [])
 * @method Result deregisterScalableTarget(array $args = [])
 * @method Promise deregisterScalableTargetAsync(array $args = [])
 * @method Result describeScalableTargets(array $args = [])
 * @method Promise describeScalableTargetsAsync(array $args = [])
 * @method Result describeScalingActivities(array $args = [])
 * @method Promise describeScalingActivitiesAsync(array $args = [])
 * @method Result describeScalingPolicies(array $args = [])
 * @method Promise describeScalingPoliciesAsync(array $args = [])
 * @method Result describeScheduledActions(array $args = [])
 * @method Promise describeScheduledActionsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putScalingPolicy(array $args = [])
 * @method Promise putScalingPolicyAsync(array $args = [])
 * @method Result putScheduledAction(array $args = [])
 * @method Promise putScheduledActionAsync(array $args = [])
 * @method Result registerScalableTarget(array $args = [])
 * @method Promise registerScalableTargetAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class ApplicationAutoScalingClient extends AwsClient {}
