<?php
namespace Aws\MarketplaceCommerceAnalytics;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Marketplace Commerce Analytics** service.
 *
 * @method Result generateDataSet(array $args = [])
 * @method Promise generateDataSetAsync(array $args = [])
 * @method Result startSupportDataExport(array $args = [])
 * @method Promise startSupportDataExportAsync(array $args = [])
 */
class MarketplaceCommerceAnalyticsClient extends AwsClient {}
