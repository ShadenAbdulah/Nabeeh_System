<?php
namespace Aws\Pipes;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon EventBridge Pipes** service.
 * @method Result createPipe(array $args = [])
 * @method Promise createPipeAsync(array $args = [])
 * @method Result deletePipe(array $args = [])
 * @method Promise deletePipeAsync(array $args = [])
 * @method Result describePipe(array $args = [])
 * @method Promise describePipeAsync(array $args = [])
 * @method Result listPipes(array $args = [])
 * @method Promise listPipesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startPipe(array $args = [])
 * @method Promise startPipeAsync(array $args = [])
 * @method Result stopPipe(array $args = [])
 * @method Promise stopPipeAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updatePipe(array $args = [])
 * @method Promise updatePipeAsync(array $args = [])
 */
class PipesClient extends AwsClient {}
