<?php
namespace Aws\RecycleBin;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Recycle Bin** service.
 * @method Result createRule(array $args = [])
 * @method Promise createRuleAsync(array $args = [])
 * @method Result deleteRule(array $args = [])
 * @method Promise deleteRuleAsync(array $args = [])
 * @method Result getRule(array $args = [])
 * @method Promise getRuleAsync(array $args = [])
 * @method Result listRules(array $args = [])
 * @method Promise listRulesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result lockRule(array $args = [])
 * @method Promise lockRuleAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result unlockRule(array $args = [])
 * @method Promise unlockRuleAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateRule(array $args = [])
 * @method Promise updateRuleAsync(array $args = [])
 */
class RecycleBinClient extends AwsClient {}
