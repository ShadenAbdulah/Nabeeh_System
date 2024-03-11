<?php
namespace Aws\SageMakerGeospatial;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon SageMaker geospatial capabilities** service.
 * @method Result deleteEarthObservationJob(array $args = [])
 * @method Promise deleteEarthObservationJobAsync(array $args = [])
 * @method Result deleteVectorEnrichmentJob(array $args = [])
 * @method Promise deleteVectorEnrichmentJobAsync(array $args = [])
 * @method Result exportEarthObservationJob(array $args = [])
 * @method Promise exportEarthObservationJobAsync(array $args = [])
 * @method Result exportVectorEnrichmentJob(array $args = [])
 * @method Promise exportVectorEnrichmentJobAsync(array $args = [])
 * @method Result getEarthObservationJob(array $args = [])
 * @method Promise getEarthObservationJobAsync(array $args = [])
 * @method Result getRasterDataCollection(array $args = [])
 * @method Promise getRasterDataCollectionAsync(array $args = [])
 * @method Result getTile(array $args = [])
 * @method Promise getTileAsync(array $args = [])
 * @method Result getVectorEnrichmentJob(array $args = [])
 * @method Promise getVectorEnrichmentJobAsync(array $args = [])
 * @method Result listEarthObservationJobs(array $args = [])
 * @method Promise listEarthObservationJobsAsync(array $args = [])
 * @method Result listRasterDataCollections(array $args = [])
 * @method Promise listRasterDataCollectionsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listVectorEnrichmentJobs(array $args = [])
 * @method Promise listVectorEnrichmentJobsAsync(array $args = [])
 * @method Result searchRasterDataCollection(array $args = [])
 * @method Promise searchRasterDataCollectionAsync(array $args = [])
 * @method Result startEarthObservationJob(array $args = [])
 * @method Promise startEarthObservationJobAsync(array $args = [])
 * @method Result startVectorEnrichmentJob(array $args = [])
 * @method Promise startVectorEnrichmentJobAsync(array $args = [])
 * @method Result stopEarthObservationJob(array $args = [])
 * @method Promise stopEarthObservationJobAsync(array $args = [])
 * @method Result stopVectorEnrichmentJob(array $args = [])
 * @method Promise stopVectorEnrichmentJobAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class SageMakerGeospatialClient extends AwsClient {}
