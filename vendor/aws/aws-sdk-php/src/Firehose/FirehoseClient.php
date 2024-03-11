<?php
namespace Aws\Firehose;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Kinesis Firehose** service.
 *
 * @method Result createDeliveryStream(array $args = [])
 * @method Promise createDeliveryStreamAsync(array $args = [])
 * @method Result deleteDeliveryStream(array $args = [])
 * @method Promise deleteDeliveryStreamAsync(array $args = [])
 * @method Result describeDeliveryStream(array $args = [])
 * @method Promise describeDeliveryStreamAsync(array $args = [])
 * @method Result listDeliveryStreams(array $args = [])
 * @method Promise listDeliveryStreamsAsync(array $args = [])
 * @method Result listTagsForDeliveryStream(array $args = [])
 * @method Promise listTagsForDeliveryStreamAsync(array $args = [])
 * @method Result putRecord(array $args = [])
 * @method Promise putRecordAsync(array $args = [])
 * @method Result putRecordBatch(array $args = [])
 * @method Promise putRecordBatchAsync(array $args = [])
 * @method Result startDeliveryStreamEncryption(array $args = [])
 * @method Promise startDeliveryStreamEncryptionAsync(array $args = [])
 * @method Result stopDeliveryStreamEncryption(array $args = [])
 * @method Promise stopDeliveryStreamEncryptionAsync(array $args = [])
 * @method Result tagDeliveryStream(array $args = [])
 * @method Promise tagDeliveryStreamAsync(array $args = [])
 * @method Result untagDeliveryStream(array $args = [])
 * @method Promise untagDeliveryStreamAsync(array $args = [])
 * @method Result updateDestination(array $args = [])
 * @method Promise updateDestinationAsync(array $args = [])
 */
class FirehoseClient extends AwsClient {}
