<?php
namespace Aws\FreeTier;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Free Tier** service.
 * @method Result getFreeTierUsage(array $args = [])
 * @method Promise getFreeTierUsageAsync(array $args = [])
 */
class FreeTierClient extends AwsClient {}
