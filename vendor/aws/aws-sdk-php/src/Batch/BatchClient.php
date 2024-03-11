<?php
namespace Aws\Batch;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Batch** service.
 * @method Result cancelJob(array $args = [])
 * @method Promise cancelJobAsync(array $args = [])
 * @method Result createComputeEnvironment(array $args = [])
 * @method Promise createComputeEnvironmentAsync(array $args = [])
 * @method Result createJobQueue(array $args = [])
 * @method Promise createJobQueueAsync(array $args = [])
 * @method Result createSchedulingPolicy(array $args = [])
 * @method Promise createSchedulingPolicyAsync(array $args = [])
 * @method Result deleteComputeEnvironment(array $args = [])
 * @method Promise deleteComputeEnvironmentAsync(array $args = [])
 * @method Result deleteJobQueue(array $args = [])
 * @method Promise deleteJobQueueAsync(array $args = [])
 * @method Result deleteSchedulingPolicy(array $args = [])
 * @method Promise deleteSchedulingPolicyAsync(array $args = [])
 * @method Result deregisterJobDefinition(array $args = [])
 * @method Promise deregisterJobDefinitionAsync(array $args = [])
 * @method Result describeComputeEnvironments(array $args = [])
 * @method Promise describeComputeEnvironmentsAsync(array $args = [])
 * @method Result describeJobDefinitions(array $args = [])
 * @method Promise describeJobDefinitionsAsync(array $args = [])
 * @method Result describeJobQueues(array $args = [])
 * @method Promise describeJobQueuesAsync(array $args = [])
 * @method Result describeJobs(array $args = [])
 * @method Promise describeJobsAsync(array $args = [])
 * @method Result describeSchedulingPolicies(array $args = [])
 * @method Promise describeSchedulingPoliciesAsync(array $args = [])
 * @method Result listJobs(array $args = [])
 * @method Promise listJobsAsync(array $args = [])
 * @method Result listSchedulingPolicies(array $args = [])
 * @method Promise listSchedulingPoliciesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result registerJobDefinition(array $args = [])
 * @method Promise registerJobDefinitionAsync(array $args = [])
 * @method Result submitJob(array $args = [])
 * @method Promise submitJobAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result terminateJob(array $args = [])
 * @method Promise terminateJobAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateComputeEnvironment(array $args = [])
 * @method Promise updateComputeEnvironmentAsync(array $args = [])
 * @method Result updateJobQueue(array $args = [])
 * @method Promise updateJobQueueAsync(array $args = [])
 * @method Result updateSchedulingPolicy(array $args = [])
 * @method Promise updateSchedulingPolicyAsync(array $args = [])
 */
class BatchClient extends AwsClient {}
