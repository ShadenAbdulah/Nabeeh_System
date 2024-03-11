<?php
namespace Aws\MigrationHub;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Migration Hub** service.
 * @method Result associateCreatedArtifact(array $args = [])
 * @method Promise associateCreatedArtifactAsync(array $args = [])
 * @method Result associateDiscoveredResource(array $args = [])
 * @method Promise associateDiscoveredResourceAsync(array $args = [])
 * @method Result createProgressUpdateStream(array $args = [])
 * @method Promise createProgressUpdateStreamAsync(array $args = [])
 * @method Result deleteProgressUpdateStream(array $args = [])
 * @method Promise deleteProgressUpdateStreamAsync(array $args = [])
 * @method Result describeApplicationState(array $args = [])
 * @method Promise describeApplicationStateAsync(array $args = [])
 * @method Result describeMigrationTask(array $args = [])
 * @method Promise describeMigrationTaskAsync(array $args = [])
 * @method Result disassociateCreatedArtifact(array $args = [])
 * @method Promise disassociateCreatedArtifactAsync(array $args = [])
 * @method Result disassociateDiscoveredResource(array $args = [])
 * @method Promise disassociateDiscoveredResourceAsync(array $args = [])
 * @method Result importMigrationTask(array $args = [])
 * @method Promise importMigrationTaskAsync(array $args = [])
 * @method Result listApplicationStates(array $args = [])
 * @method Promise listApplicationStatesAsync(array $args = [])
 * @method Result listCreatedArtifacts(array $args = [])
 * @method Promise listCreatedArtifactsAsync(array $args = [])
 * @method Result listDiscoveredResources(array $args = [])
 * @method Promise listDiscoveredResourcesAsync(array $args = [])
 * @method Result listMigrationTasks(array $args = [])
 * @method Promise listMigrationTasksAsync(array $args = [])
 * @method Result listProgressUpdateStreams(array $args = [])
 * @method Promise listProgressUpdateStreamsAsync(array $args = [])
 * @method Result notifyApplicationState(array $args = [])
 * @method Promise notifyApplicationStateAsync(array $args = [])
 * @method Result notifyMigrationTaskState(array $args = [])
 * @method Promise notifyMigrationTaskStateAsync(array $args = [])
 * @method Result putResourceAttributes(array $args = [])
 * @method Promise putResourceAttributesAsync(array $args = [])
 */
class MigrationHubClient extends AwsClient {}
