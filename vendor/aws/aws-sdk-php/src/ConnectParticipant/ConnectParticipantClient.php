<?php
namespace Aws\ConnectParticipant;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Connect Participant Service** service.
 * @method Result completeAttachmentUpload(array $args = [])
 * @method Promise completeAttachmentUploadAsync(array $args = [])
 * @method Result createParticipantConnection(array $args = [])
 * @method Promise createParticipantConnectionAsync(array $args = [])
 * @method Result describeView(array $args = [])
 * @method Promise describeViewAsync(array $args = [])
 * @method Result disconnectParticipant(array $args = [])
 * @method Promise disconnectParticipantAsync(array $args = [])
 * @method Result getAttachment(array $args = [])
 * @method Promise getAttachmentAsync(array $args = [])
 * @method Result getTranscript(array $args = [])
 * @method Promise getTranscriptAsync(array $args = [])
 * @method Result sendEvent(array $args = [])
 * @method Promise sendEventAsync(array $args = [])
 * @method Result sendMessage(array $args = [])
 * @method Promise sendMessageAsync(array $args = [])
 * @method Result startAttachmentUpload(array $args = [])
 * @method Promise startAttachmentUploadAsync(array $args = [])
 */
class ConnectParticipantClient extends AwsClient {}
