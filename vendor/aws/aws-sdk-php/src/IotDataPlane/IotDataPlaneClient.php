<?php
namespace Aws\IotDataPlane;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS IoT Data Plane** service.
 *
 * @method Result deleteThingShadow(array $args = [])
 * @method Promise deleteThingShadowAsync(array $args = [])
 * @method Result getRetainedMessage(array $args = [])
 * @method Promise getRetainedMessageAsync(array $args = [])
 * @method Result getThingShadow(array $args = [])
 * @method Promise getThingShadowAsync(array $args = [])
 * @method Result listNamedShadowsForThing(array $args = [])
 * @method Promise listNamedShadowsForThingAsync(array $args = [])
 * @method Result listRetainedMessages(array $args = [])
 * @method Promise listRetainedMessagesAsync(array $args = [])
 * @method Result publish(array $args = [])
 * @method Promise publishAsync(array $args = [])
 * @method Result updateThingShadow(array $args = [])
 * @method Promise updateThingShadowAsync(array $args = [])
 */
class IotDataPlaneClient extends AwsClient {}
