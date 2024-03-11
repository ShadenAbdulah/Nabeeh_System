<?php
namespace Aws\DynamoDbStreams;

use Aws\AwsClient;
use Aws\DynamoDb\DynamoDbClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon DynamoDb Streams** service.
 *
 * @method Result describeStream(array $args = [])
 * @method Promise describeStreamAsync(array $args = [])
 * @method Result getRecords(array $args = [])
 * @method Promise getRecordsAsync(array $args = [])
 * @method Result getShardIterator(array $args = [])
 * @method Promise getShardIteratorAsync(array $args = [])
 * @method Result listStreams(array $args = [])
 * @method Promise listStreamsAsync(array $args = [])
 */
class DynamoDbStreamsClient extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        $args['retries']['default'] = 11;
        $args['retries']['fn'] = [DynamoDbClient::class, '_applyRetryConfig'];

        return $args;
    }
}
