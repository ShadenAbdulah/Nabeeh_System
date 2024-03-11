<?php
namespace Aws\TimestreamQuery;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Timestream Query** service.
 * @method Result cancelQuery(array $args = [])
 * @method Promise cancelQueryAsync(array $args = [])
 * @method Result createScheduledQuery(array $args = [])
 * @method Promise createScheduledQueryAsync(array $args = [])
 * @method Result deleteScheduledQuery(array $args = [])
 * @method Promise deleteScheduledQueryAsync(array $args = [])
 * @method Result describeEndpoints(array $args = [])
 * @method Promise describeEndpointsAsync(array $args = [])
 * @method Result describeScheduledQuery(array $args = [])
 * @method Promise describeScheduledQueryAsync(array $args = [])
 * @method Result executeScheduledQuery(array $args = [])
 * @method Promise executeScheduledQueryAsync(array $args = [])
 * @method Result listScheduledQueries(array $args = [])
 * @method Promise listScheduledQueriesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result prepareQuery(array $args = [])
 * @method Promise prepareQueryAsync(array $args = [])
 * @method Result query(array $args = [])
 * @method Promise queryAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateScheduledQuery(array $args = [])
 * @method Promise updateScheduledQueryAsync(array $args = [])
 */
class TimestreamQueryClient extends AwsClient {}
