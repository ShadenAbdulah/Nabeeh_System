<?php
namespace Aws\Account;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Account** service.
 * @method Result deleteAlternateContact(array $args = [])
 * @method Promise deleteAlternateContactAsync(array $args = [])
 * @method Result disableRegion(array $args = [])
 * @method Promise disableRegionAsync(array $args = [])
 * @method Result enableRegion(array $args = [])
 * @method Promise enableRegionAsync(array $args = [])
 * @method Result getAlternateContact(array $args = [])
 * @method Promise getAlternateContactAsync(array $args = [])
 * @method Result getContactInformation(array $args = [])
 * @method Promise getContactInformationAsync(array $args = [])
 * @method Result getRegionOptStatus(array $args = [])
 * @method Promise getRegionOptStatusAsync(array $args = [])
 * @method Result listRegions(array $args = [])
 * @method Promise listRegionsAsync(array $args = [])
 * @method Result putAlternateContact(array $args = [])
 * @method Promise putAlternateContactAsync(array $args = [])
 * @method Result putContactInformation(array $args = [])
 * @method Promise putContactInformationAsync(array $args = [])
 */
class AccountClient extends AwsClient {}
