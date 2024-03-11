<?php
namespace Aws\CloudTrailData;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS CloudTrail Data Service** service.
 * @method Result putAuditEvents(array $args = [])
 * @method Promise putAuditEventsAsync(array $args = [])
 */
class CloudTrailDataClient extends AwsClient {}
