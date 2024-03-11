<?php
namespace Aws\ApiGatewayManagementApi;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AmazonApiGatewayManagementApi** service.
 * @method Result deleteConnection(array $args = [])
 * @method Promise deleteConnectionAsync(array $args = [])
 * @method Result getConnection(array $args = [])
 * @method Promise getConnectionAsync(array $args = [])
 * @method Result postToConnection(array $args = [])
 * @method Promise postToConnectionAsync(array $args = [])
 */
class ApiGatewayManagementApiClient extends AwsClient {}
