<?php
namespace Aws\WorkMailMessageFlow;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon WorkMail Message Flow** service.
 * @method Result getRawMessageContent(array $args = [])
 * @method Promise getRawMessageContentAsync(array $args = [])
 * @method Result putRawMessageContent(array $args = [])
 * @method Promise putRawMessageContentAsync(array $args = [])
 */
class WorkMailMessageFlowClient extends AwsClient {}
