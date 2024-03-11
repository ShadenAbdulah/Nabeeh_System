<?php
namespace Aws\LookoutforVision;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Lookout for Vision** service.
 * @method Result createDataset(array $args = [])
 * @method Promise createDatasetAsync(array $args = [])
 * @method Result createModel(array $args = [])
 * @method Promise createModelAsync(array $args = [])
 * @method Result createProject(array $args = [])
 * @method Promise createProjectAsync(array $args = [])
 * @method Result deleteDataset(array $args = [])
 * @method Promise deleteDatasetAsync(array $args = [])
 * @method Result deleteModel(array $args = [])
 * @method Promise deleteModelAsync(array $args = [])
 * @method Result deleteProject(array $args = [])
 * @method Promise deleteProjectAsync(array $args = [])
 * @method Result describeDataset(array $args = [])
 * @method Promise describeDatasetAsync(array $args = [])
 * @method Result describeModel(array $args = [])
 * @method Promise describeModelAsync(array $args = [])
 * @method Result describeModelPackagingJob(array $args = [])
 * @method Promise describeModelPackagingJobAsync(array $args = [])
 * @method Result describeProject(array $args = [])
 * @method Promise describeProjectAsync(array $args = [])
 * @method Result detectAnomalies(array $args = [])
 * @method Promise detectAnomaliesAsync(array $args = [])
 * @method Result listDatasetEntries(array $args = [])
 * @method Promise listDatasetEntriesAsync(array $args = [])
 * @method Result listModelPackagingJobs(array $args = [])
 * @method Promise listModelPackagingJobsAsync(array $args = [])
 * @method Result listModels(array $args = [])
 * @method Promise listModelsAsync(array $args = [])
 * @method Result listProjects(array $args = [])
 * @method Promise listProjectsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startModel(array $args = [])
 * @method Promise startModelAsync(array $args = [])
 * @method Result startModelPackagingJob(array $args = [])
 * @method Promise startModelPackagingJobAsync(array $args = [])
 * @method Result stopModel(array $args = [])
 * @method Promise stopModelAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateDatasetEntries(array $args = [])
 * @method Promise updateDatasetEntriesAsync(array $args = [])
 */
class LookoutforVisionClient extends AwsClient {}
