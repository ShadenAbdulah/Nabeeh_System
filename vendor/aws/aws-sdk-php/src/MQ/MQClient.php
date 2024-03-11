<?php
namespace Aws\MQ;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AmazonMQ** service.
 * @method Result createBroker(array $args = [])
 * @method Promise createBrokerAsync(array $args = [])
 * @method Result createConfiguration(array $args = [])
 * @method Promise createConfigurationAsync(array $args = [])
 * @method Result createTags(array $args = [])
 * @method Promise createTagsAsync(array $args = [])
 * @method Result createUser(array $args = [])
 * @method Promise createUserAsync(array $args = [])
 * @method Result deleteBroker(array $args = [])
 * @method Promise deleteBrokerAsync(array $args = [])
 * @method Result deleteTags(array $args = [])
 * @method Promise deleteTagsAsync(array $args = [])
 * @method Result deleteUser(array $args = [])
 * @method Promise deleteUserAsync(array $args = [])
 * @method Result describeBroker(array $args = [])
 * @method Promise describeBrokerAsync(array $args = [])
 * @method Result describeBrokerEngineTypes(array $args = [])
 * @method Promise describeBrokerEngineTypesAsync(array $args = [])
 * @method Result describeBrokerInstanceOptions(array $args = [])
 * @method Promise describeBrokerInstanceOptionsAsync(array $args = [])
 * @method Result describeConfiguration(array $args = [])
 * @method Promise describeConfigurationAsync(array $args = [])
 * @method Result describeConfigurationRevision(array $args = [])
 * @method Promise describeConfigurationRevisionAsync(array $args = [])
 * @method Result describeUser(array $args = [])
 * @method Promise describeUserAsync(array $args = [])
 * @method Result listBrokers(array $args = [])
 * @method Promise listBrokersAsync(array $args = [])
 * @method Result listConfigurationRevisions(array $args = [])
 * @method Promise listConfigurationRevisionsAsync(array $args = [])
 * @method Result listConfigurations(array $args = [])
 * @method Promise listConfigurationsAsync(array $args = [])
 * @method Result listTags(array $args = [])
 * @method Promise listTagsAsync(array $args = [])
 * @method Result listUsers(array $args = [])
 * @method Promise listUsersAsync(array $args = [])
 * @method Result promote(array $args = [])
 * @method Promise promoteAsync(array $args = [])
 * @method Result rebootBroker(array $args = [])
 * @method Promise rebootBrokerAsync(array $args = [])
 * @method Result updateBroker(array $args = [])
 * @method Promise updateBrokerAsync(array $args = [])
 * @method Result updateConfiguration(array $args = [])
 * @method Promise updateConfigurationAsync(array $args = [])
 * @method Result updateUser(array $args = [])
 * @method Promise updateUserAsync(array $args = [])
 */
class MQClient extends AwsClient {}
