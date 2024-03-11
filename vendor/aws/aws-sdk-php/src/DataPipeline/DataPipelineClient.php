<?php
namespace Aws\DataPipeline;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Data Pipeline** service.
 *
 * @method Result activatePipeline(array $args = [])
 * @method Promise activatePipelineAsync(array $args = [])
 * @method Result addTags(array $args = [])
 * @method Promise addTagsAsync(array $args = [])
 * @method Result createPipeline(array $args = [])
 * @method Promise createPipelineAsync(array $args = [])
 * @method Result deactivatePipeline(array $args = [])
 * @method Promise deactivatePipelineAsync(array $args = [])
 * @method Result deletePipeline(array $args = [])
 * @method Promise deletePipelineAsync(array $args = [])
 * @method Result describeObjects(array $args = [])
 * @method Promise describeObjectsAsync(array $args = [])
 * @method Result describePipelines(array $args = [])
 * @method Promise describePipelinesAsync(array $args = [])
 * @method Result evaluateExpression(array $args = [])
 * @method Promise evaluateExpressionAsync(array $args = [])
 * @method Result getPipelineDefinition(array $args = [])
 * @method Promise getPipelineDefinitionAsync(array $args = [])
 * @method Result listPipelines(array $args = [])
 * @method Promise listPipelinesAsync(array $args = [])
 * @method Result pollForTask(array $args = [])
 * @method Promise pollForTaskAsync(array $args = [])
 * @method Result putPipelineDefinition(array $args = [])
 * @method Promise putPipelineDefinitionAsync(array $args = [])
 * @method Result queryObjects(array $args = [])
 * @method Promise queryObjectsAsync(array $args = [])
 * @method Result removeTags(array $args = [])
 * @method Promise removeTagsAsync(array $args = [])
 * @method Result reportTaskProgress(array $args = [])
 * @method Promise reportTaskProgressAsync(array $args = [])
 * @method Result reportTaskRunnerHeartbeat(array $args = [])
 * @method Promise reportTaskRunnerHeartbeatAsync(array $args = [])
 * @method Result setStatus(array $args = [])
 * @method Promise setStatusAsync(array $args = [])
 * @method Result setTaskStatus(array $args = [])
 * @method Promise setTaskStatusAsync(array $args = [])
 * @method Result validatePipelineDefinition(array $args = [])
 * @method Promise validatePipelineDefinitionAsync(array $args = [])
 */
class DataPipelineClient extends AwsClient {}
