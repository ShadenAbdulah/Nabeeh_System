<?php
namespace Aws\ElasticTranscoder;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Elastic Transcoder** service.
 *
 * @method Result cancelJob(array $args = [])
 * @method Promise cancelJobAsync(array $args = [])
 * @method Result createJob(array $args = [])
 * @method Promise createJobAsync(array $args = [])
 * @method Result createPipeline(array $args = [])
 * @method Promise createPipelineAsync(array $args = [])
 * @method Result createPreset(array $args = [])
 * @method Promise createPresetAsync(array $args = [])
 * @method Result deletePipeline(array $args = [])
 * @method Promise deletePipelineAsync(array $args = [])
 * @method Result deletePreset(array $args = [])
 * @method Promise deletePresetAsync(array $args = [])
 * @method Result listJobsByPipeline(array $args = [])
 * @method Promise listJobsByPipelineAsync(array $args = [])
 * @method Result listJobsByStatus(array $args = [])
 * @method Promise listJobsByStatusAsync(array $args = [])
 * @method Result listPipelines(array $args = [])
 * @method Promise listPipelinesAsync(array $args = [])
 * @method Result listPresets(array $args = [])
 * @method Promise listPresetsAsync(array $args = [])
 * @method Result readJob(array $args = [])
 * @method Promise readJobAsync(array $args = [])
 * @method Result readPipeline(array $args = [])
 * @method Promise readPipelineAsync(array $args = [])
 * @method Result readPreset(array $args = [])
 * @method Promise readPresetAsync(array $args = [])
 * @method Result testRole(array $args = [])
 * @method Promise testRoleAsync(array $args = [])
 * @method Result updatePipeline(array $args = [])
 * @method Promise updatePipelineAsync(array $args = [])
 * @method Result updatePipelineNotifications(array $args = [])
 * @method Promise updatePipelineNotificationsAsync(array $args = [])
 * @method Result updatePipelineStatus(array $args = [])
 * @method Promise updatePipelineStatusAsync(array $args = [])
 */
class ElasticTranscoderClient extends AwsClient {}
