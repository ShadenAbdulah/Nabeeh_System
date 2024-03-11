<?php
namespace Aws\KafkaConnect;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Managed Streaming for Kafka Connect** service.
 * @method Result createConnector(array $args = [])
 * @method Promise createConnectorAsync(array $args = [])
 * @method Result createCustomPlugin(array $args = [])
 * @method Promise createCustomPluginAsync(array $args = [])
 * @method Result createWorkerConfiguration(array $args = [])
 * @method Promise createWorkerConfigurationAsync(array $args = [])
 * @method Result deleteConnector(array $args = [])
 * @method Promise deleteConnectorAsync(array $args = [])
 * @method Result deleteCustomPlugin(array $args = [])
 * @method Promise deleteCustomPluginAsync(array $args = [])
 * @method Result deleteWorkerConfiguration(array $args = [])
 * @method Promise deleteWorkerConfigurationAsync(array $args = [])
 * @method Result describeConnector(array $args = [])
 * @method Promise describeConnectorAsync(array $args = [])
 * @method Result describeCustomPlugin(array $args = [])
 * @method Promise describeCustomPluginAsync(array $args = [])
 * @method Result describeWorkerConfiguration(array $args = [])
 * @method Promise describeWorkerConfigurationAsync(array $args = [])
 * @method Result listConnectors(array $args = [])
 * @method Promise listConnectorsAsync(array $args = [])
 * @method Result listCustomPlugins(array $args = [])
 * @method Promise listCustomPluginsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listWorkerConfigurations(array $args = [])
 * @method Promise listWorkerConfigurationsAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateConnector(array $args = [])
 * @method Promise updateConnectorAsync(array $args = [])
 */
class KafkaConnectClient extends AwsClient {}
