<?php
namespace Aws\PinpointSMSVoice;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Pinpoint SMS and Voice Service** service.
 * @method Result createConfigurationSet(array $args = [])
 * @method Promise createConfigurationSetAsync(array $args = [])
 * @method Result createConfigurationSetEventDestination(array $args = [])
 * @method Promise createConfigurationSetEventDestinationAsync(array $args = [])
 * @method Result deleteConfigurationSet(array $args = [])
 * @method Promise deleteConfigurationSetAsync(array $args = [])
 * @method Result deleteConfigurationSetEventDestination(array $args = [])
 * @method Promise deleteConfigurationSetEventDestinationAsync(array $args = [])
 * @method Result getConfigurationSetEventDestinations(array $args = [])
 * @method Promise getConfigurationSetEventDestinationsAsync(array $args = [])
 * @method Result listConfigurationSets(array $args = [])
 * @method Promise listConfigurationSetsAsync(array $args = [])
 * @method Result sendVoiceMessage(array $args = [])
 * @method Promise sendVoiceMessageAsync(array $args = [])
 * @method Result updateConfigurationSetEventDestination(array $args = [])
 * @method Promise updateConfigurationSetEventDestinationAsync(array $args = [])
 */
class PinpointSMSVoiceClient extends AwsClient {}
