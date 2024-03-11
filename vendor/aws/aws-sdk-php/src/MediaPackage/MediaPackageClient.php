<?php
namespace Aws\MediaPackage;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Elemental MediaPackage** service.
 * @method Result configureLogs(array $args = [])
 * @method Promise configureLogsAsync(array $args = [])
 * @method Result createChannel(array $args = [])
 * @method Promise createChannelAsync(array $args = [])
 * @method Result createHarvestJob(array $args = [])
 * @method Promise createHarvestJobAsync(array $args = [])
 * @method Result createOriginEndpoint(array $args = [])
 * @method Promise createOriginEndpointAsync(array $args = [])
 * @method Result deleteChannel(array $args = [])
 * @method Promise deleteChannelAsync(array $args = [])
 * @method Result deleteOriginEndpoint(array $args = [])
 * @method Promise deleteOriginEndpointAsync(array $args = [])
 * @method Result describeChannel(array $args = [])
 * @method Promise describeChannelAsync(array $args = [])
 * @method Result describeHarvestJob(array $args = [])
 * @method Promise describeHarvestJobAsync(array $args = [])
 * @method Result describeOriginEndpoint(array $args = [])
 * @method Promise describeOriginEndpointAsync(array $args = [])
 * @method Result listChannels(array $args = [])
 * @method Promise listChannelsAsync(array $args = [])
 * @method Result listHarvestJobs(array $args = [])
 * @method Promise listHarvestJobsAsync(array $args = [])
 * @method Result listOriginEndpoints(array $args = [])
 * @method Promise listOriginEndpointsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result rotateChannelCredentials(array $args = [])
 * @method Promise rotateChannelCredentialsAsync(array $args = [])
 * @method Result rotateIngestEndpointCredentials(array $args = [])
 * @method Promise rotateIngestEndpointCredentialsAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateChannel(array $args = [])
 * @method Promise updateChannelAsync(array $args = [])
 * @method Result updateOriginEndpoint(array $args = [])
 * @method Promise updateOriginEndpointAsync(array $args = [])
 */
class MediaPackageClient extends AwsClient {}
