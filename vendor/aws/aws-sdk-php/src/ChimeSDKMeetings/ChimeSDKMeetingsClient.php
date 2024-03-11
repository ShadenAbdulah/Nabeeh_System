<?php
namespace Aws\ChimeSDKMeetings;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Chime SDK Meetings** service.
 * @method Result batchCreateAttendee(array $args = [])
 * @method Promise batchCreateAttendeeAsync(array $args = [])
 * @method Result batchUpdateAttendeeCapabilitiesExcept(array $args = [])
 * @method Promise batchUpdateAttendeeCapabilitiesExceptAsync(array $args = [])
 * @method Result createAttendee(array $args = [])
 * @method Promise createAttendeeAsync(array $args = [])
 * @method Result createMeeting(array $args = [])
 * @method Promise createMeetingAsync(array $args = [])
 * @method Result createMeetingWithAttendees(array $args = [])
 * @method Promise createMeetingWithAttendeesAsync(array $args = [])
 * @method Result deleteAttendee(array $args = [])
 * @method Promise deleteAttendeeAsync(array $args = [])
 * @method Result deleteMeeting(array $args = [])
 * @method Promise deleteMeetingAsync(array $args = [])
 * @method Result getAttendee(array $args = [])
 * @method Promise getAttendeeAsync(array $args = [])
 * @method Result getMeeting(array $args = [])
 * @method Promise getMeetingAsync(array $args = [])
 * @method Result listAttendees(array $args = [])
 * @method Promise listAttendeesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startMeetingTranscription(array $args = [])
 * @method Promise startMeetingTranscriptionAsync(array $args = [])
 * @method Result stopMeetingTranscription(array $args = [])
 * @method Promise stopMeetingTranscriptionAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAttendeeCapabilities(array $args = [])
 * @method Promise updateAttendeeCapabilitiesAsync(array $args = [])
 */
class ChimeSDKMeetingsClient extends AwsClient {}
