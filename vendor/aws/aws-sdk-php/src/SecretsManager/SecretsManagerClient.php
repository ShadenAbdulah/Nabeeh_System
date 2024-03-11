<?php
namespace Aws\SecretsManager;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Secrets Manager** service.
 * @method Result batchGetSecretValue(array $args = [])
 * @method Promise batchGetSecretValueAsync(array $args = [])
 * @method Result cancelRotateSecret(array $args = [])
 * @method Promise cancelRotateSecretAsync(array $args = [])
 * @method Result createSecret(array $args = [])
 * @method Promise createSecretAsync(array $args = [])
 * @method Result deleteResourcePolicy(array $args = [])
 * @method Promise deleteResourcePolicyAsync(array $args = [])
 * @method Result deleteSecret(array $args = [])
 * @method Promise deleteSecretAsync(array $args = [])
 * @method Result describeSecret(array $args = [])
 * @method Promise describeSecretAsync(array $args = [])
 * @method Result getRandomPassword(array $args = [])
 * @method Promise getRandomPasswordAsync(array $args = [])
 * @method Result getResourcePolicy(array $args = [])
 * @method Promise getResourcePolicyAsync(array $args = [])
 * @method Result getSecretValue(array $args = [])
 * @method Promise getSecretValueAsync(array $args = [])
 * @method Result listSecretVersionIds(array $args = [])
 * @method Promise listSecretVersionIdsAsync(array $args = [])
 * @method Result listSecrets(array $args = [])
 * @method Promise listSecretsAsync(array $args = [])
 * @method Result putResourcePolicy(array $args = [])
 * @method Promise putResourcePolicyAsync(array $args = [])
 * @method Result putSecretValue(array $args = [])
 * @method Promise putSecretValueAsync(array $args = [])
 * @method Result removeRegionsFromReplication(array $args = [])
 * @method Promise removeRegionsFromReplicationAsync(array $args = [])
 * @method Result replicateSecretToRegions(array $args = [])
 * @method Promise replicateSecretToRegionsAsync(array $args = [])
 * @method Result restoreSecret(array $args = [])
 * @method Promise restoreSecretAsync(array $args = [])
 * @method Result rotateSecret(array $args = [])
 * @method Promise rotateSecretAsync(array $args = [])
 * @method Result stopReplicationToReplica(array $args = [])
 * @method Promise stopReplicationToReplicaAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateSecret(array $args = [])
 * @method Promise updateSecretAsync(array $args = [])
 * @method Result updateSecretVersionStage(array $args = [])
 * @method Promise updateSecretVersionStageAsync(array $args = [])
 * @method Result validateResourcePolicy(array $args = [])
 * @method Promise validateResourcePolicyAsync(array $args = [])
 */
class SecretsManagerClient extends AwsClient {}
