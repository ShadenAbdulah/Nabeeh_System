<?php
namespace Aws\BackupStorage;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Backup Storage** service.
 * @method Result deleteObject(array $args = [])
 * @method Promise deleteObjectAsync(array $args = [])
 * @method Result getChunk(array $args = [])
 * @method Promise getChunkAsync(array $args = [])
 * @method Result getObjectMetadata(array $args = [])
 * @method Promise getObjectMetadataAsync(array $args = [])
 * @method Result listChunks(array $args = [])
 * @method Promise listChunksAsync(array $args = [])
 * @method Result listObjects(array $args = [])
 * @method Promise listObjectsAsync(array $args = [])
 * @method Result notifyObjectComplete(array $args = [])
 * @method Promise notifyObjectCompleteAsync(array $args = [])
 * @method Result putChunk(array $args = [])
 * @method Promise putChunkAsync(array $args = [])
 * @method Result putObject(array $args = [])
 * @method Promise putObjectAsync(array $args = [])
 * @method Result startObject(array $args = [])
 * @method Promise startObjectAsync(array $args = [])
 */
class BackupStorageClient extends AwsClient {}
