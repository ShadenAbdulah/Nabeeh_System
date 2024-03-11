<?php
namespace Aws\CloudControlApi;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Cloud Control API** service.
 * @method Result cancelResourceRequest(array $args = [])
 * @method Promise cancelResourceRequestAsync(array $args = [])
 * @method Result createResource(array $args = [])
 * @method Promise createResourceAsync(array $args = [])
 * @method Result deleteResource(array $args = [])
 * @method Promise deleteResourceAsync(array $args = [])
 * @method Result getResource(array $args = [])
 * @method Promise getResourceAsync(array $args = [])
 * @method Result getResourceRequestStatus(array $args = [])
 * @method Promise getResourceRequestStatusAsync(array $args = [])
 * @method Result listResourceRequests(array $args = [])
 * @method Promise listResourceRequestsAsync(array $args = [])
 * @method Result listResources(array $args = [])
 * @method Promise listResourcesAsync(array $args = [])
 * @method Result updateResource(array $args = [])
 * @method Promise updateResourceAsync(array $args = [])
 */
class CloudControlApiClient extends AwsClient {}
