<?php
namespace Aws\MedicalImaging;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Health Imaging** service.
 * @method Result copyImageSet(array $args = [])
 * @method Promise copyImageSetAsync(array $args = [])
 * @method Result createDatastore(array $args = [])
 * @method Promise createDatastoreAsync(array $args = [])
 * @method Result deleteDatastore(array $args = [])
 * @method Promise deleteDatastoreAsync(array $args = [])
 * @method Result deleteImageSet(array $args = [])
 * @method Promise deleteImageSetAsync(array $args = [])
 * @method Result getDICOMImportJob(array $args = [])
 * @method Promise getDICOMImportJobAsync(array $args = [])
 * @method Result getDatastore(array $args = [])
 * @method Promise getDatastoreAsync(array $args = [])
 * @method Result getImageFrame(array $args = [])
 * @method Promise getImageFrameAsync(array $args = [])
 * @method Result getImageSet(array $args = [])
 * @method Promise getImageSetAsync(array $args = [])
 * @method Result getImageSetMetadata(array $args = [])
 * @method Promise getImageSetMetadataAsync(array $args = [])
 * @method Result listDICOMImportJobs(array $args = [])
 * @method Promise listDICOMImportJobsAsync(array $args = [])
 * @method Result listDatastores(array $args = [])
 * @method Promise listDatastoresAsync(array $args = [])
 * @method Result listImageSetVersions(array $args = [])
 * @method Promise listImageSetVersionsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result searchImageSets(array $args = [])
 * @method Promise searchImageSetsAsync(array $args = [])
 * @method Result startDICOMImportJob(array $args = [])
 * @method Promise startDICOMImportJobAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateImageSetMetadata(array $args = [])
 * @method Promise updateImageSetMetadataAsync(array $args = [])
 */
class MedicalImagingClient extends AwsClient {}
