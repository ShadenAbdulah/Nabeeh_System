<?php
namespace Aws\MigrationHubConfig;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Migration Hub Config** service.
 * @method Result createHomeRegionControl(array $args = [])
 * @method Promise createHomeRegionControlAsync(array $args = [])
 * @method Result deleteHomeRegionControl(array $args = [])
 * @method Promise deleteHomeRegionControlAsync(array $args = [])
 * @method Result describeHomeRegionControls(array $args = [])
 * @method Promise describeHomeRegionControlsAsync(array $args = [])
 * @method Result getHomeRegion(array $args = [])
 * @method Promise getHomeRegionAsync(array $args = [])
 */
class MigrationHubConfigClient extends AwsClient {}
