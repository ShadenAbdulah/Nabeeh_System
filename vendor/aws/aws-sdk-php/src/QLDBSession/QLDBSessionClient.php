<?php
namespace Aws\QLDBSession;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon QLDB Session** service.
 * @method Result sendCommand(array $args = [])
 * @method Promise sendCommandAsync(array $args = [])
 */
class QLDBSessionClient extends AwsClient {}
