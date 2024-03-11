<?php
namespace Aws\S3Outposts;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon S3 on Outposts** service.
 * @method Result createEndpoint(array $args = [])
 * @method Promise createEndpointAsync(array $args = [])
 * @method Result deleteEndpoint(array $args = [])
 * @method Promise deleteEndpointAsync(array $args = [])
 * @method Result listEndpoints(array $args = [])
 * @method Promise listEndpointsAsync(array $args = [])
 * @method Result listOutpostsWithS3(array $args = [])
 * @method Promise listOutpostsWithS3Async(array $args = [])
 * @method Result listSharedEndpoints(array $args = [])
 * @method Promise listSharedEndpointsAsync(array $args = [])
 */
class S3OutpostsClient extends AwsClient {}
