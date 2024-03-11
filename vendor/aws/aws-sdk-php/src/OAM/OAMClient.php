<?php
namespace Aws\OAM;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **CloudWatch Observability Access Manager** service.
 * @method Result createLink(array $args = [])
 * @method Promise createLinkAsync(array $args = [])
 * @method Result createSink(array $args = [])
 * @method Promise createSinkAsync(array $args = [])
 * @method Result deleteLink(array $args = [])
 * @method Promise deleteLinkAsync(array $args = [])
 * @method Result deleteSink(array $args = [])
 * @method Promise deleteSinkAsync(array $args = [])
 * @method Result getLink(array $args = [])
 * @method Promise getLinkAsync(array $args = [])
 * @method Result getSink(array $args = [])
 * @method Promise getSinkAsync(array $args = [])
 * @method Result getSinkPolicy(array $args = [])
 * @method Promise getSinkPolicyAsync(array $args = [])
 * @method Result listAttachedLinks(array $args = [])
 * @method Promise listAttachedLinksAsync(array $args = [])
 * @method Result listLinks(array $args = [])
 * @method Promise listLinksAsync(array $args = [])
 * @method Result listSinks(array $args = [])
 * @method Promise listSinksAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putSinkPolicy(array $args = [])
 * @method Promise putSinkPolicyAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateLink(array $args = [])
 * @method Promise updateLinkAsync(array $args = [])
 */
class OAMClient extends AwsClient {}
