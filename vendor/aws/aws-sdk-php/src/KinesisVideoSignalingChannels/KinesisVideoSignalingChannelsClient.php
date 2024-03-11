<?php
namespace Aws\KinesisVideoSignalingChannels;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Kinesis Video Signaling Channels** service.
 * @method Result getIceServerConfig(array $args = [])
 * @method Promise getIceServerConfigAsync(array $args = [])
 * @method Result sendAlexaOfferToMaster(array $args = [])
 * @method Promise sendAlexaOfferToMasterAsync(array $args = [])
 */
class KinesisVideoSignalingChannelsClient extends AwsClient {}
