<?php
namespace Aws\signer;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Signer** service.
 * @method Result addProfilePermission(array $args = [])
 * @method Promise addProfilePermissionAsync(array $args = [])
 * @method Result cancelSigningProfile(array $args = [])
 * @method Promise cancelSigningProfileAsync(array $args = [])
 * @method Result describeSigningJob(array $args = [])
 * @method Promise describeSigningJobAsync(array $args = [])
 * @method Result getRevocationStatus(array $args = [])
 * @method Promise getRevocationStatusAsync(array $args = [])
 * @method Result getSigningPlatform(array $args = [])
 * @method Promise getSigningPlatformAsync(array $args = [])
 * @method Result getSigningProfile(array $args = [])
 * @method Promise getSigningProfileAsync(array $args = [])
 * @method Result listProfilePermissions(array $args = [])
 * @method Promise listProfilePermissionsAsync(array $args = [])
 * @method Result listSigningJobs(array $args = [])
 * @method Promise listSigningJobsAsync(array $args = [])
 * @method Result listSigningPlatforms(array $args = [])
 * @method Promise listSigningPlatformsAsync(array $args = [])
 * @method Result listSigningProfiles(array $args = [])
 * @method Promise listSigningProfilesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putSigningProfile(array $args = [])
 * @method Promise putSigningProfileAsync(array $args = [])
 * @method Result removeProfilePermission(array $args = [])
 * @method Promise removeProfilePermissionAsync(array $args = [])
 * @method Result revokeSignature(array $args = [])
 * @method Promise revokeSignatureAsync(array $args = [])
 * @method Result revokeSigningProfile(array $args = [])
 * @method Promise revokeSigningProfileAsync(array $args = [])
 * @method Result signPayload(array $args = [])
 * @method Promise signPayloadAsync(array $args = [])
 * @method Result startSigningJob(array $args = [])
 * @method Promise startSigningJobAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class signerClient extends AwsClient {}
