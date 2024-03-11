<?php
namespace Aws\SSO;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Single Sign-On** service.
 * @method Result getRoleCredentials(array $args = [])
 * @method Promise getRoleCredentialsAsync(array $args = [])
 * @method Result listAccountRoles(array $args = [])
 * @method Promise listAccountRolesAsync(array $args = [])
 * @method Result listAccounts(array $args = [])
 * @method Promise listAccountsAsync(array $args = [])
 * @method Result logout(array $args = [])
 * @method Promise logoutAsync(array $args = [])
 */
class SSOClient extends AwsClient {}
