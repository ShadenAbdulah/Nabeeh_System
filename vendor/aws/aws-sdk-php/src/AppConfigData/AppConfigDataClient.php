<?php
namespace Aws\AppConfigData;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS AppConfig Data** service.
 * @method Result getLatestConfiguration(array $args = [])
 * @method Promise getLatestConfigurationAsync(array $args = [])
 * @method Result startConfigurationSession(array $args = [])
 * @method Promise startConfigurationSessionAsync(array $args = [])
 */
class AppConfigDataClient extends AwsClient {}
