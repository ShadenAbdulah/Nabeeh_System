<?php
namespace Aws\Cloud9;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Cloud9** service.
 * @method Result createEnvironmentEC2(array $args = [])
 * @method Promise createEnvironmentEC2Async(array $args = [])
 * @method Result createEnvironmentMembership(array $args = [])
 * @method Promise createEnvironmentMembershipAsync(array $args = [])
 * @method Result deleteEnvironment(array $args = [])
 * @method Promise deleteEnvironmentAsync(array $args = [])
 * @method Result deleteEnvironmentMembership(array $args = [])
 * @method Promise deleteEnvironmentMembershipAsync(array $args = [])
 * @method Result describeEnvironmentMemberships(array $args = [])
 * @method Promise describeEnvironmentMembershipsAsync(array $args = [])
 * @method Result describeEnvironmentStatus(array $args = [])
 * @method Promise describeEnvironmentStatusAsync(array $args = [])
 * @method Result describeEnvironments(array $args = [])
 * @method Promise describeEnvironmentsAsync(array $args = [])
 * @method Result listEnvironments(array $args = [])
 * @method Promise listEnvironmentsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateEnvironment(array $args = [])
 * @method Promise updateEnvironmentAsync(array $args = [])
 * @method Result updateEnvironmentMembership(array $args = [])
 * @method Promise updateEnvironmentMembershipAsync(array $args = [])
 */
class Cloud9Client extends AwsClient {}
