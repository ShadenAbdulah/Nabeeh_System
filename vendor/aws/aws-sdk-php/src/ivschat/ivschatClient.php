<?php
namespace Aws\ivschat;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Interactive Video Service Chat** service.
 * @method Result createChatToken(array $args = [])
 * @method Promise createChatTokenAsync(array $args = [])
 * @method Result createLoggingConfiguration(array $args = [])
 * @method Promise createLoggingConfigurationAsync(array $args = [])
 * @method Result createRoom(array $args = [])
 * @method Promise createRoomAsync(array $args = [])
 * @method Result deleteLoggingConfiguration(array $args = [])
 * @method Promise deleteLoggingConfigurationAsync(array $args = [])
 * @method Result deleteMessage(array $args = [])
 * @method Promise deleteMessageAsync(array $args = [])
 * @method Result deleteRoom(array $args = [])
 * @method Promise deleteRoomAsync(array $args = [])
 * @method Result disconnectUser(array $args = [])
 * @method Promise disconnectUserAsync(array $args = [])
 * @method Result getLoggingConfiguration(array $args = [])
 * @method Promise getLoggingConfigurationAsync(array $args = [])
 * @method Result getRoom(array $args = [])
 * @method Promise getRoomAsync(array $args = [])
 * @method Result listLoggingConfigurations(array $args = [])
 * @method Promise listLoggingConfigurationsAsync(array $args = [])
 * @method Result listRooms(array $args = [])
 * @method Promise listRoomsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result sendEvent(array $args = [])
 * @method Promise sendEventAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateLoggingConfiguration(array $args = [])
 * @method Promise updateLoggingConfigurationAsync(array $args = [])
 * @method Result updateRoom(array $args = [])
 * @method Promise updateRoomAsync(array $args = [])
 */
class ivschatClient extends AwsClient {}
