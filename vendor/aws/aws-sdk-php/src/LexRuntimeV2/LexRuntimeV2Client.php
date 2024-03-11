<?php
namespace Aws\LexRuntimeV2;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Lex Runtime V2** service.
 * @method Result deleteSession(array $args = [])
 * @method Promise deleteSessionAsync(array $args = [])
 * @method Result getSession(array $args = [])
 * @method Promise getSessionAsync(array $args = [])
 * @method Result putSession(array $args = [])
 * @method Promise putSessionAsync(array $args = [])
 * @method Result recognizeText(array $args = [])
 * @method Promise recognizeTextAsync(array $args = [])
 * @method Result recognizeUtterance(array $args = [])
 * @method Promise recognizeUtteranceAsync(array $args = [])
 */
class LexRuntimeV2Client extends AwsClient {}
