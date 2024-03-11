<?php
namespace Aws\CodeStarNotifications;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS CodeStar Notifications** service.
 * @method Result createNotificationRule(array $args = [])
 * @method Promise createNotificationRuleAsync(array $args = [])
 * @method Result deleteNotificationRule(array $args = [])
 * @method Promise deleteNotificationRuleAsync(array $args = [])
 * @method Result deleteTarget(array $args = [])
 * @method Promise deleteTargetAsync(array $args = [])
 * @method Result describeNotificationRule(array $args = [])
 * @method Promise describeNotificationRuleAsync(array $args = [])
 * @method Result listEventTypes(array $args = [])
 * @method Promise listEventTypesAsync(array $args = [])
 * @method Result listNotificationRules(array $args = [])
 * @method Promise listNotificationRulesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTargets(array $args = [])
 * @method Promise listTargetsAsync(array $args = [])
 * @method Result subscribe(array $args = [])
 * @method Promise subscribeAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result unsubscribe(array $args = [])
 * @method Promise unsubscribeAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateNotificationRule(array $args = [])
 * @method Promise updateNotificationRuleAsync(array $args = [])
 */
class CodeStarNotificationsClient extends AwsClient {}
