<?php
namespace Aws\ManagedBlockchainQuery;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Managed Blockchain Query** service.
 * @method Result batchGetTokenBalance(array $args = [])
 * @method Promise batchGetTokenBalanceAsync(array $args = [])
 * @method Result getAssetContract(array $args = [])
 * @method Promise getAssetContractAsync(array $args = [])
 * @method Result getTokenBalance(array $args = [])
 * @method Promise getTokenBalanceAsync(array $args = [])
 * @method Result getTransaction(array $args = [])
 * @method Promise getTransactionAsync(array $args = [])
 * @method Result listAssetContracts(array $args = [])
 * @method Promise listAssetContractsAsync(array $args = [])
 * @method Result listTokenBalances(array $args = [])
 * @method Promise listTokenBalancesAsync(array $args = [])
 * @method Result listTransactionEvents(array $args = [])
 * @method Promise listTransactionEventsAsync(array $args = [])
 * @method Result listTransactions(array $args = [])
 * @method Promise listTransactionsAsync(array $args = [])
 */
class ManagedBlockchainQueryClient extends AwsClient {}
