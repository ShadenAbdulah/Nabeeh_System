<?php
namespace Aws\ForecastQueryService;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Forecast Query Service** service.
 * @method Result queryForecast(array $args = [])
 * @method Promise queryForecastAsync(array $args = [])
 * @method Result queryWhatIfForecast(array $args = [])
 * @method Promise queryWhatIfForecastAsync(array $args = [])
 */
class ForecastQueryServiceClient extends AwsClient {}
