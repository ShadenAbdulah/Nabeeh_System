<?php
namespace Aws\OSIS;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon OpenSearch Ingestion** service.
 * @method Result createPipeline(array $args = [])
 * @method Promise createPipelineAsync(array $args = [])
 * @method Result deletePipeline(array $args = [])
 * @method Promise deletePipelineAsync(array $args = [])
 * @method Result getPipeline(array $args = [])
 * @method Promise getPipelineAsync(array $args = [])
 * @method Result getPipelineBlueprint(array $args = [])
 * @method Promise getPipelineBlueprintAsync(array $args = [])
 * @method Result getPipelineChangeProgress(array $args = [])
 * @method Promise getPipelineChangeProgressAsync(array $args = [])
 * @method Result listPipelineBlueprints(array $args = [])
 * @method Promise listPipelineBlueprintsAsync(array $args = [])
 * @method Result listPipelines(array $args = [])
 * @method Promise listPipelinesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startPipeline(array $args = [])
 * @method Promise startPipelineAsync(array $args = [])
 * @method Result stopPipeline(array $args = [])
 * @method Promise stopPipelineAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updatePipeline(array $args = [])
 * @method Promise updatePipelineAsync(array $args = [])
 * @method Result validatePipeline(array $args = [])
 * @method Promise validatePipelineAsync(array $args = [])
 */
class OSISClient extends AwsClient {}
