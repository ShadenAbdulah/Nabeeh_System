<?php
namespace Aws\LicenseManagerLinuxSubscriptions;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS License Manager Linux Subscriptions** service.
 * @method Result getServiceSettings(array $args = [])
 * @method Promise getServiceSettingsAsync(array $args = [])
 * @method Result listLinuxSubscriptionInstances(array $args = [])
 * @method Promise listLinuxSubscriptionInstancesAsync(array $args = [])
 * @method Result listLinuxSubscriptions(array $args = [])
 * @method Promise listLinuxSubscriptionsAsync(array $args = [])
 * @method Result updateServiceSettings(array $args = [])
 * @method Promise updateServiceSettingsAsync(array $args = [])
 */
class LicenseManagerLinuxSubscriptionsClient extends AwsClient {}
