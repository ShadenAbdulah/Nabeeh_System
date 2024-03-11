<?php
namespace Aws\SupplyChain;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Supply Chain** service.
 * @method Result createBillOfMaterialsImportJob(array $args = [])
 * @method Promise createBillOfMaterialsImportJobAsync(array $args = [])
 * @method Result getBillOfMaterialsImportJob(array $args = [])
 * @method Promise getBillOfMaterialsImportJobAsync(array $args = [])
 */
class SupplyChainClient extends AwsClient {}
