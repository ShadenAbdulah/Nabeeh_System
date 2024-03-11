<?php
namespace Aws\LicenseManagerUserSubscriptions;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS License Manager User Subscriptions** service.
 * @method Result associateUser(array $args = [])
 * @method Promise associateUserAsync(array $args = [])
 * @method Result deregisterIdentityProvider(array $args = [])
 * @method Promise deregisterIdentityProviderAsync(array $args = [])
 * @method Result disassociateUser(array $args = [])
 * @method Promise disassociateUserAsync(array $args = [])
 * @method Result listIdentityProviders(array $args = [])
 * @method Promise listIdentityProvidersAsync(array $args = [])
 * @method Result listInstances(array $args = [])
 * @method Promise listInstancesAsync(array $args = [])
 * @method Result listProductSubscriptions(array $args = [])
 * @method Promise listProductSubscriptionsAsync(array $args = [])
 * @method Result listUserAssociations(array $args = [])
 * @method Promise listUserAssociationsAsync(array $args = [])
 * @method Result registerIdentityProvider(array $args = [])
 * @method Promise registerIdentityProviderAsync(array $args = [])
 * @method Result startProductSubscription(array $args = [])
 * @method Promise startProductSubscriptionAsync(array $args = [])
 * @method Result stopProductSubscription(array $args = [])
 * @method Promise stopProductSubscriptionAsync(array $args = [])
 * @method Result updateIdentityProviderSettings(array $args = [])
 * @method Promise updateIdentityProviderSettingsAsync(array $args = [])
 */
class LicenseManagerUserSubscriptionsClient extends AwsClient {}
