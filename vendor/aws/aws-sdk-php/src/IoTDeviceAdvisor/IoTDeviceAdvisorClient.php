<?php
namespace Aws\IoTDeviceAdvisor;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS IoT Core Device Advisor** service.
 * @method Result createSuiteDefinition(array $args = [])
 * @method Promise createSuiteDefinitionAsync(array $args = [])
 * @method Result deleteSuiteDefinition(array $args = [])
 * @method Promise deleteSuiteDefinitionAsync(array $args = [])
 * @method Result getEndpoint(array $args = [])
 * @method Promise getEndpointAsync(array $args = [])
 * @method Result getSuiteDefinition(array $args = [])
 * @method Promise getSuiteDefinitionAsync(array $args = [])
 * @method Result getSuiteRun(array $args = [])
 * @method Promise getSuiteRunAsync(array $args = [])
 * @method Result getSuiteRunReport(array $args = [])
 * @method Promise getSuiteRunReportAsync(array $args = [])
 * @method Result listSuiteDefinitions(array $args = [])
 * @method Promise listSuiteDefinitionsAsync(array $args = [])
 * @method Result listSuiteRuns(array $args = [])
 * @method Promise listSuiteRunsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startSuiteRun(array $args = [])
 * @method Promise startSuiteRunAsync(array $args = [])
 * @method Result stopSuiteRun(array $args = [])
 * @method Promise stopSuiteRunAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateSuiteDefinition(array $args = [])
 * @method Promise updateSuiteDefinitionAsync(array $args = [])
 */
class IoTDeviceAdvisorClient extends AwsClient {}
