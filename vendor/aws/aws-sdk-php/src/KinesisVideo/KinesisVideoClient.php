<?php
namespace Aws\KinesisVideo;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Kinesis Video Streams** service.
 * @method Result createSignalingChannel(array $args = [])
 * @method Promise createSignalingChannelAsync(array $args = [])
 * @method Result createStream(array $args = [])
 * @method Promise createStreamAsync(array $args = [])
 * @method Result deleteEdgeConfiguration(array $args = [])
 * @method Promise deleteEdgeConfigurationAsync(array $args = [])
 * @method Result deleteSignalingChannel(array $args = [])
 * @method Promise deleteSignalingChannelAsync(array $args = [])
 * @method Result deleteStream(array $args = [])
 * @method Promise deleteStreamAsync(array $args = [])
 * @method Result describeEdgeConfiguration(array $args = [])
 * @method Promise describeEdgeConfigurationAsync(array $args = [])
 * @method Result describeImageGenerationConfiguration(array $args = [])
 * @method Promise describeImageGenerationConfigurationAsync(array $args = [])
 * @method Result describeMappedResourceConfiguration(array $args = [])
 * @method Promise describeMappedResourceConfigurationAsync(array $args = [])
 * @method Result describeMediaStorageConfiguration(array $args = [])
 * @method Promise describeMediaStorageConfigurationAsync(array $args = [])
 * @method Result describeNotificationConfiguration(array $args = [])
 * @method Promise describeNotificationConfigurationAsync(array $args = [])
 * @method Result describeSignalingChannel(array $args = [])
 * @method Promise describeSignalingChannelAsync(array $args = [])
 * @method Result describeStream(array $args = [])
 * @method Promise describeStreamAsync(array $args = [])
 * @method Result getDataEndpoint(array $args = [])
 * @method Promise getDataEndpointAsync(array $args = [])
 * @method Result getSignalingChannelEndpoint(array $args = [])
 * @method Promise getSignalingChannelEndpointAsync(array $args = [])
 * @method Result listEdgeAgentConfigurations(array $args = [])
 * @method Promise listEdgeAgentConfigurationsAsync(array $args = [])
 * @method Result listSignalingChannels(array $args = [])
 * @method Promise listSignalingChannelsAsync(array $args = [])
 * @method Result listStreams(array $args = [])
 * @method Promise listStreamsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTagsForStream(array $args = [])
 * @method Promise listTagsForStreamAsync(array $args = [])
 * @method Result startEdgeConfigurationUpdate(array $args = [])
 * @method Promise startEdgeConfigurationUpdateAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result tagStream(array $args = [])
 * @method Promise tagStreamAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result untagStream(array $args = [])
 * @method Promise untagStreamAsync(array $args = [])
 * @method Result updateDataRetention(array $args = [])
 * @method Promise updateDataRetentionAsync(array $args = [])
 * @method Result updateImageGenerationConfiguration(array $args = [])
 * @method Promise updateImageGenerationConfigurationAsync(array $args = [])
 * @method Result updateMediaStorageConfiguration(array $args = [])
 * @method Promise updateMediaStorageConfigurationAsync(array $args = [])
 * @method Result updateNotificationConfiguration(array $args = [])
 * @method Promise updateNotificationConfigurationAsync(array $args = [])
 * @method Result updateSignalingChannel(array $args = [])
 * @method Promise updateSignalingChannelAsync(array $args = [])
 * @method Result updateStream(array $args = [])
 * @method Promise updateStreamAsync(array $args = [])
 */
class KinesisVideoClient extends AwsClient {}
