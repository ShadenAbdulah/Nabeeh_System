<?php
namespace Aws\EC2InstanceConnect;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS EC2 Instance Connect** service.
 * @method Result sendSSHPublicKey(array $args = [])
 * @method Promise sendSSHPublicKeyAsync(array $args = [])
 * @method Result sendSerialConsoleSSHPublicKey(array $args = [])
 * @method Promise sendSerialConsoleSSHPublicKeyAsync(array $args = [])
 */
class EC2InstanceConnectClient extends AwsClient {}
