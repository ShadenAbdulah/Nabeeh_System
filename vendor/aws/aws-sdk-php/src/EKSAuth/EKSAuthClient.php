<?php
namespace Aws\EKSAuth;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon EKS Auth** service.
 * @method Result assumeRoleForPodIdentity(array $args = [])
 * @method Promise assumeRoleForPodIdentityAsync(array $args = [])
 */
class EKSAuthClient extends AwsClient {}
