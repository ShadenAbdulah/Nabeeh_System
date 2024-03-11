<?php
namespace Aws\CognitoIdentity;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Cognito Identity** service.
 *
 * @method Result createIdentityPool(array $args = [])
 * @method Promise createIdentityPoolAsync(array $args = [])
 * @method Result deleteIdentities(array $args = [])
 * @method Promise deleteIdentitiesAsync(array $args = [])
 * @method Result deleteIdentityPool(array $args = [])
 * @method Promise deleteIdentityPoolAsync(array $args = [])
 * @method Result describeIdentity(array $args = [])
 * @method Promise describeIdentityAsync(array $args = [])
 * @method Result describeIdentityPool(array $args = [])
 * @method Promise describeIdentityPoolAsync(array $args = [])
 * @method Result getCredentialsForIdentity(array $args = [])
 * @method Promise getCredentialsForIdentityAsync(array $args = [])
 * @method Result getId(array $args = [])
 * @method Promise getIdAsync(array $args = [])
 * @method Result getIdentityPoolRoles(array $args = [])
 * @method Promise getIdentityPoolRolesAsync(array $args = [])
 * @method Result getOpenIdToken(array $args = [])
 * @method Promise getOpenIdTokenAsync(array $args = [])
 * @method Result getOpenIdTokenForDeveloperIdentity(array $args = [])
 * @method Promise getOpenIdTokenForDeveloperIdentityAsync(array $args = [])
 * @method Result getPrincipalTagAttributeMap(array $args = [])
 * @method Promise getPrincipalTagAttributeMapAsync(array $args = [])
 * @method Result listIdentities(array $args = [])
 * @method Promise listIdentitiesAsync(array $args = [])
 * @method Result listIdentityPools(array $args = [])
 * @method Promise listIdentityPoolsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result lookupDeveloperIdentity(array $args = [])
 * @method Promise lookupDeveloperIdentityAsync(array $args = [])
 * @method Result mergeDeveloperIdentities(array $args = [])
 * @method Promise mergeDeveloperIdentitiesAsync(array $args = [])
 * @method Result setIdentityPoolRoles(array $args = [])
 * @method Promise setIdentityPoolRolesAsync(array $args = [])
 * @method Result setPrincipalTagAttributeMap(array $args = [])
 * @method Promise setPrincipalTagAttributeMapAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result unlinkDeveloperIdentity(array $args = [])
 * @method Promise unlinkDeveloperIdentityAsync(array $args = [])
 * @method Result unlinkIdentity(array $args = [])
 * @method Promise unlinkIdentityAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateIdentityPool(array $args = [])
 * @method Promise updateIdentityPoolAsync(array $args = [])
 */
class CognitoIdentityClient extends AwsClient {}
