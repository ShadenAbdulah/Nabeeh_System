<?php
namespace Aws\CloudFrontKeyValueStore;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon CloudFront KeyValueStore** service.
 * @method Result deleteKey(array $args = [])
 * @method Promise deleteKeyAsync(array $args = [])
 * @method Result describeKeyValueStore(array $args = [])
 * @method Promise describeKeyValueStoreAsync(array $args = [])
 * @method Result getKey(array $args = [])
 * @method Promise getKeyAsync(array $args = [])
 * @method Result listKeys(array $args = [])
 * @method Promise listKeysAsync(array $args = [])
 * @method Result putKey(array $args = [])
 * @method Promise putKeyAsync(array $args = [])
 * @method Result updateKeys(array $args = [])
 * @method Promise updateKeysAsync(array $args = [])
 */
class CloudFrontKeyValueStoreClient extends AwsClient {}
