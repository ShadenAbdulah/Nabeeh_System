<?php
namespace Aws\Health;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Health APIs and Notifications** service.
 * @method Result describeAffectedAccountsForOrganization(array $args = [])
 * @method Promise describeAffectedAccountsForOrganizationAsync(array $args = [])
 * @method Result describeAffectedEntities(array $args = [])
 * @method Promise describeAffectedEntitiesAsync(array $args = [])
 * @method Result describeAffectedEntitiesForOrganization(array $args = [])
 * @method Promise describeAffectedEntitiesForOrganizationAsync(array $args = [])
 * @method Result describeEntityAggregates(array $args = [])
 * @method Promise describeEntityAggregatesAsync(array $args = [])
 * @method Result describeEntityAggregatesForOrganization(array $args = [])
 * @method Promise describeEntityAggregatesForOrganizationAsync(array $args = [])
 * @method Result describeEventAggregates(array $args = [])
 * @method Promise describeEventAggregatesAsync(array $args = [])
 * @method Result describeEventDetails(array $args = [])
 * @method Promise describeEventDetailsAsync(array $args = [])
 * @method Result describeEventDetailsForOrganization(array $args = [])
 * @method Promise describeEventDetailsForOrganizationAsync(array $args = [])
 * @method Result describeEventTypes(array $args = [])
 * @method Promise describeEventTypesAsync(array $args = [])
 * @method Result describeEvents(array $args = [])
 * @method Promise describeEventsAsync(array $args = [])
 * @method Result describeEventsForOrganization(array $args = [])
 * @method Promise describeEventsForOrganizationAsync(array $args = [])
 * @method Result describeHealthServiceStatusForOrganization(array $args = [])
 * @method Promise describeHealthServiceStatusForOrganizationAsync(array $args = [])
 * @method Result disableHealthServiceAccessForOrganization(array $args = [])
 * @method Promise disableHealthServiceAccessForOrganizationAsync(array $args = [])
 * @method Result enableHealthServiceAccessForOrganization(array $args = [])
 * @method Promise enableHealthServiceAccessForOrganizationAsync(array $args = [])
 */
class HealthClient extends AwsClient {}
