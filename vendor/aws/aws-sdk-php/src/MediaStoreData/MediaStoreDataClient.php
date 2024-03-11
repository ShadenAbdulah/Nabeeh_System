<?php
namespace Aws\MediaStoreData;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Elemental MediaStore Data Plane** service.
 * @method Result deleteObject(array $args = [])
 * @method Promise deleteObjectAsync(array $args = [])
 * @method Result describeObject(array $args = [])
 * @method Promise describeObjectAsync(array $args = [])
 * @method Result getObject(array $args = [])
 * @method Promise getObjectAsync(array $args = [])
 * @method Result listItems(array $args = [])
 * @method Promise listItemsAsync(array $args = [])
 * @method Result putObject(array $args = [])
 * @method Promise putObjectAsync(array $args = [])
 */
class MediaStoreDataClient extends AwsClient {}
