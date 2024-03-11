<?php
namespace Aws\KinesisVideoArchivedMedia;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Kinesis Video Streams Archived Media** service.
 * @method Result getClip(array $args = [])
 * @method Promise getClipAsync(array $args = [])
 * @method Result getDASHStreamingSessionURL(array $args = [])
 * @method Promise getDASHStreamingSessionURLAsync(array $args = [])
 * @method Result getHLSStreamingSessionURL(array $args = [])
 * @method Promise getHLSStreamingSessionURLAsync(array $args = [])
 * @method Result getImages(array $args = [])
 * @method Promise getImagesAsync(array $args = [])
 * @method Result getMediaForFragmentList(array $args = [])
 * @method Promise getMediaForFragmentListAsync(array $args = [])
 * @method Result listFragments(array $args = [])
 * @method Promise listFragmentsAsync(array $args = [])
 */
class KinesisVideoArchivedMediaClient extends AwsClient {}
