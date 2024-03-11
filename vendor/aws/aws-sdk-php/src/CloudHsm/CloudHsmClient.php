<?php
namespace Aws\CloudHsm;

use Aws\Api\ApiProvider;
use Aws\Api\DocModel;
use Aws\Api\Service;
use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with **AWS CloudHSM**.
 *
 * @method Result addTagsToResource(array $args = [])
 * @method Promise addTagsToResourceAsync(array $args = [])
 * @method Result createHapg(array $args = [])
 * @method Promise createHapgAsync(array $args = [])
 * @method Result createHsm(array $args = [])
 * @method Promise createHsmAsync(array $args = [])
 * @method Result createLunaClient(array $args = [])
 * @method Promise createLunaClientAsync(array $args = [])
 * @method Result deleteHapg(array $args = [])
 * @method Promise deleteHapgAsync(array $args = [])
 * @method Result deleteHsm(array $args = [])
 * @method Promise deleteHsmAsync(array $args = [])
 * @method Result deleteLunaClient(array $args = [])
 * @method Promise deleteLunaClientAsync(array $args = [])
 * @method Result describeHapg(array $args = [])
 * @method Promise describeHapgAsync(array $args = [])
 * @method Result describeHsm(array $args = [])
 * @method Promise describeHsmAsync(array $args = [])
 * @method Result describeLunaClient(array $args = [])
 * @method Promise describeLunaClientAsync(array $args = [])
 * @method Result getConfigFiles(array $args = [])
 * @method Promise getConfigFilesAsync(array $args = [])
 * @method Result listAvailableZones(array $args = [])
 * @method Promise listAvailableZonesAsync(array $args = [])
 * @method Result listHapgs(array $args = [])
 * @method Promise listHapgsAsync(array $args = [])
 * @method Result listHsms(array $args = [])
 * @method Promise listHsmsAsync(array $args = [])
 * @method Result listLunaClients(array $args = [])
 * @method Promise listLunaClientsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result modifyHapg(array $args = [])
 * @method Promise modifyHapgAsync(array $args = [])
 * @method Result modifyHsm(array $args = [])
 * @method Promise modifyHsmAsync(array $args = [])
 * @method Result modifyLunaClient(array $args = [])
 * @method Promise modifyLunaClientAsync(array $args = [])
 * @method Result removeTagsFromResource(array $args = [])
 * @method Promise removeTagsFromResourceAsync(array $args = [])
 */
class CloudHsmClient extends AwsClient {}
