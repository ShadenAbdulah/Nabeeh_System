<?php
namespace Aws\Translate;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Translate** service.
 * @method Result createParallelData(array $args = [])
 * @method Promise createParallelDataAsync(array $args = [])
 * @method Result deleteParallelData(array $args = [])
 * @method Promise deleteParallelDataAsync(array $args = [])
 * @method Result deleteTerminology(array $args = [])
 * @method Promise deleteTerminologyAsync(array $args = [])
 * @method Result describeTextTranslationJob(array $args = [])
 * @method Promise describeTextTranslationJobAsync(array $args = [])
 * @method Result getParallelData(array $args = [])
 * @method Promise getParallelDataAsync(array $args = [])
 * @method Result getTerminology(array $args = [])
 * @method Promise getTerminologyAsync(array $args = [])
 * @method Result importTerminology(array $args = [])
 * @method Promise importTerminologyAsync(array $args = [])
 * @method Result listLanguages(array $args = [])
 * @method Promise listLanguagesAsync(array $args = [])
 * @method Result listParallelData(array $args = [])
 * @method Promise listParallelDataAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTerminologies(array $args = [])
 * @method Promise listTerminologiesAsync(array $args = [])
 * @method Result listTextTranslationJobs(array $args = [])
 * @method Promise listTextTranslationJobsAsync(array $args = [])
 * @method Result startTextTranslationJob(array $args = [])
 * @method Promise startTextTranslationJobAsync(array $args = [])
 * @method Result stopTextTranslationJob(array $args = [])
 * @method Promise stopTextTranslationJobAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result translateDocument(array $args = [])
 * @method Promise translateDocumentAsync(array $args = [])
 * @method Result translateText(array $args = [])
 * @method Promise translateTextAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateParallelData(array $args = [])
 * @method Promise updateParallelDataAsync(array $args = [])
 */
class TranslateClient extends AwsClient {}
