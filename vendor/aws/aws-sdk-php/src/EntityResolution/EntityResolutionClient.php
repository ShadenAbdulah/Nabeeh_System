<?php
namespace Aws\EntityResolution;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS EntityResolution** service.
 * @method Result createIdMappingWorkflow(array $args = [])
 * @method Promise createIdMappingWorkflowAsync(array $args = [])
 * @method Result createMatchingWorkflow(array $args = [])
 * @method Promise createMatchingWorkflowAsync(array $args = [])
 * @method Result createSchemaMapping(array $args = [])
 * @method Promise createSchemaMappingAsync(array $args = [])
 * @method Result deleteIdMappingWorkflow(array $args = [])
 * @method Promise deleteIdMappingWorkflowAsync(array $args = [])
 * @method Result deleteMatchingWorkflow(array $args = [])
 * @method Promise deleteMatchingWorkflowAsync(array $args = [])
 * @method Result deleteSchemaMapping(array $args = [])
 * @method Promise deleteSchemaMappingAsync(array $args = [])
 * @method Result getIdMappingJob(array $args = [])
 * @method Promise getIdMappingJobAsync(array $args = [])
 * @method Result getIdMappingWorkflow(array $args = [])
 * @method Promise getIdMappingWorkflowAsync(array $args = [])
 * @method Result getMatchId(array $args = [])
 * @method Promise getMatchIdAsync(array $args = [])
 * @method Result getMatchingJob(array $args = [])
 * @method Promise getMatchingJobAsync(array $args = [])
 * @method Result getMatchingWorkflow(array $args = [])
 * @method Promise getMatchingWorkflowAsync(array $args = [])
 * @method Result getProviderService(array $args = [])
 * @method Promise getProviderServiceAsync(array $args = [])
 * @method Result getSchemaMapping(array $args = [])
 * @method Promise getSchemaMappingAsync(array $args = [])
 * @method Result listIdMappingJobs(array $args = [])
 * @method Promise listIdMappingJobsAsync(array $args = [])
 * @method Result listIdMappingWorkflows(array $args = [])
 * @method Promise listIdMappingWorkflowsAsync(array $args = [])
 * @method Result listMatchingJobs(array $args = [])
 * @method Promise listMatchingJobsAsync(array $args = [])
 * @method Result listMatchingWorkflows(array $args = [])
 * @method Promise listMatchingWorkflowsAsync(array $args = [])
 * @method Result listProviderServices(array $args = [])
 * @method Promise listProviderServicesAsync(array $args = [])
 * @method Result listSchemaMappings(array $args = [])
 * @method Promise listSchemaMappingsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startIdMappingJob(array $args = [])
 * @method Promise startIdMappingJobAsync(array $args = [])
 * @method Result startMatchingJob(array $args = [])
 * @method Promise startMatchingJobAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateIdMappingWorkflow(array $args = [])
 * @method Promise updateIdMappingWorkflowAsync(array $args = [])
 * @method Result updateMatchingWorkflow(array $args = [])
 * @method Promise updateMatchingWorkflowAsync(array $args = [])
 * @method Result updateSchemaMapping(array $args = [])
 * @method Promise updateSchemaMappingAsync(array $args = [])
 */
class EntityResolutionClient extends AwsClient {}
