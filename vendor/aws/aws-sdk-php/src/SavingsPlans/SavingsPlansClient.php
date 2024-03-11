<?php
namespace Aws\SavingsPlans;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Savings Plans** service.
 * @method Result createSavingsPlan(array $args = [])
 * @method Promise createSavingsPlanAsync(array $args = [])
 * @method Result deleteQueuedSavingsPlan(array $args = [])
 * @method Promise deleteQueuedSavingsPlanAsync(array $args = [])
 * @method Result describeSavingsPlanRates(array $args = [])
 * @method Promise describeSavingsPlanRatesAsync(array $args = [])
 * @method Result describeSavingsPlans(array $args = [])
 * @method Promise describeSavingsPlansAsync(array $args = [])
 * @method Result describeSavingsPlansOfferingRates(array $args = [])
 * @method Promise describeSavingsPlansOfferingRatesAsync(array $args = [])
 * @method Result describeSavingsPlansOfferings(array $args = [])
 * @method Promise describeSavingsPlansOfferingsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class SavingsPlansClient extends AwsClient {}
