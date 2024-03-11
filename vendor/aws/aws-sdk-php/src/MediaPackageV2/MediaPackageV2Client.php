<?php
namespace Aws\MediaPackageV2;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Elemental MediaPackage v2** service.
 * @method Result createChannel(array $args = [])
 * @method Promise createChannelAsync(array $args = [])
 * @method Result createChannelGroup(array $args = [])
 * @method Promise createChannelGroupAsync(array $args = [])
 * @method Result createOriginEndpoint(array $args = [])
 * @method Promise createOriginEndpointAsync(array $args = [])
 * @method Result deleteChannel(array $args = [])
 * @method Promise deleteChannelAsync(array $args = [])
 * @method Result deleteChannelGroup(array $args = [])
 * @method Promise deleteChannelGroupAsync(array $args = [])
 * @method Result deleteChannelPolicy(array $args = [])
 * @method Promise deleteChannelPolicyAsync(array $args = [])
 * @method Result deleteOriginEndpoint(array $args = [])
 * @method Promise deleteOriginEndpointAsync(array $args = [])
 * @method Result deleteOriginEndpointPolicy(array $args = [])
 * @method Promise deleteOriginEndpointPolicyAsync(array $args = [])
 * @method Result getChannel(array $args = [])
 * @method Promise getChannelAsync(array $args = [])
 * @method Result getChannelGroup(array $args = [])
 * @method Promise getChannelGroupAsync(array $args = [])
 * @method Result getChannelPolicy(array $args = [])
 * @method Promise getChannelPolicyAsync(array $args = [])
 * @method Result getOriginEndpoint(array $args = [])
 * @method Promise getOriginEndpointAsync(array $args = [])
 * @method Result getOriginEndpointPolicy(array $args = [])
 * @method Promise getOriginEndpointPolicyAsync(array $args = [])
 * @method Result listChannelGroups(array $args = [])
 * @method Promise listChannelGroupsAsync(array $args = [])
 * @method Result listChannels(array $args = [])
 * @method Promise listChannelsAsync(array $args = [])
 * @method Result listOriginEndpoints(array $args = [])
 * @method Promise listOriginEndpointsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putChannelPolicy(array $args = [])
 * @method Promise putChannelPolicyAsync(array $args = [])
 * @method Result putOriginEndpointPolicy(array $args = [])
 * @method Promise putOriginEndpointPolicyAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateChannel(array $args = [])
 * @method Promise updateChannelAsync(array $args = [])
 * @method Result updateChannelGroup(array $args = [])
 * @method Promise updateChannelGroupAsync(array $args = [])
 * @method Result updateOriginEndpoint(array $args = [])
 * @method Promise updateOriginEndpointAsync(array $args = [])
 */
class MediaPackageV2Client extends AwsClient {}
