<?php
namespace Aws\EMRContainers;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon EMR Containers** service.
 * @method Result cancelJobRun(array $args = [])
 * @method Promise cancelJobRunAsync(array $args = [])
 * @method Result createJobTemplate(array $args = [])
 * @method Promise createJobTemplateAsync(array $args = [])
 * @method Result createManagedEndpoint(array $args = [])
 * @method Promise createManagedEndpointAsync(array $args = [])
 * @method Result createVirtualCluster(array $args = [])
 * @method Promise createVirtualClusterAsync(array $args = [])
 * @method Result deleteJobTemplate(array $args = [])
 * @method Promise deleteJobTemplateAsync(array $args = [])
 * @method Result deleteManagedEndpoint(array $args = [])
 * @method Promise deleteManagedEndpointAsync(array $args = [])
 * @method Result deleteVirtualCluster(array $args = [])
 * @method Promise deleteVirtualClusterAsync(array $args = [])
 * @method Result describeJobRun(array $args = [])
 * @method Promise describeJobRunAsync(array $args = [])
 * @method Result describeJobTemplate(array $args = [])
 * @method Promise describeJobTemplateAsync(array $args = [])
 * @method Result describeManagedEndpoint(array $args = [])
 * @method Promise describeManagedEndpointAsync(array $args = [])
 * @method Result describeVirtualCluster(array $args = [])
 * @method Promise describeVirtualClusterAsync(array $args = [])
 * @method Result getManagedEndpointSessionCredentials(array $args = [])
 * @method Promise getManagedEndpointSessionCredentialsAsync(array $args = [])
 * @method Result listJobRuns(array $args = [])
 * @method Promise listJobRunsAsync(array $args = [])
 * @method Result listJobTemplates(array $args = [])
 * @method Promise listJobTemplatesAsync(array $args = [])
 * @method Result listManagedEndpoints(array $args = [])
 * @method Promise listManagedEndpointsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listVirtualClusters(array $args = [])
 * @method Promise listVirtualClustersAsync(array $args = [])
 * @method Result startJobRun(array $args = [])
 * @method Promise startJobRunAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class EMRContainersClient extends AwsClient {}
