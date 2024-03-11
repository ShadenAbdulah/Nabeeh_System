<?php
namespace Aws\Repostspace;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS re:Post Private** service.
 * @method Result createSpace(array $args = [])
 * @method Promise createSpaceAsync(array $args = [])
 * @method Result deleteSpace(array $args = [])
 * @method Promise deleteSpaceAsync(array $args = [])
 * @method Result deregisterAdmin(array $args = [])
 * @method Promise deregisterAdminAsync(array $args = [])
 * @method Result getSpace(array $args = [])
 * @method Promise getSpaceAsync(array $args = [])
 * @method Result listSpaces(array $args = [])
 * @method Promise listSpacesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result registerAdmin(array $args = [])
 * @method Promise registerAdminAsync(array $args = [])
 * @method Result sendInvites(array $args = [])
 * @method Promise sendInvitesAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateSpace(array $args = [])
 * @method Promise updateSpaceAsync(array $args = [])
 */
class RepostspaceClient extends AwsClient {}
