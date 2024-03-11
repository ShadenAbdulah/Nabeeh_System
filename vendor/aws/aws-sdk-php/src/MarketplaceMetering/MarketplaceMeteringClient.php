<?php
namespace Aws\MarketplaceMetering;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWSMarketplace Metering** service.
 * @method Result batchMeterUsage(array $args = [])
 * @method Promise batchMeterUsageAsync(array $args = [])
 * @method Result meterUsage(array $args = [])
 * @method Promise meterUsageAsync(array $args = [])
 * @method Result registerUsage(array $args = [])
 * @method Promise registerUsageAsync(array $args = [])
 * @method Result resolveCustomer(array $args = [])
 * @method Promise resolveCustomerAsync(array $args = [])
 */
class MarketplaceMeteringClient extends AwsClient {}
