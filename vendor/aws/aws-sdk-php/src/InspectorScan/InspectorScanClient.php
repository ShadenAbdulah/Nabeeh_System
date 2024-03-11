<?php
namespace Aws\InspectorScan;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Inspector Scan** service.
 * @method Result scanSbom(array $args = [])
 * @method Promise scanSbomAsync(array $args = [])
 */
class InspectorScanClient extends AwsClient {}
