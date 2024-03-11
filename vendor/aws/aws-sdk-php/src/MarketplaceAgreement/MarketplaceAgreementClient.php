<?php
namespace Aws\MarketplaceAgreement;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Marketplace Agreement Service** service.
 * @method Result describeAgreement(array $args = [])
 * @method Promise describeAgreementAsync(array $args = [])
 * @method Result getAgreementTerms(array $args = [])
 * @method Promise getAgreementTermsAsync(array $args = [])
 * @method Result searchAgreements(array $args = [])
 * @method Promise searchAgreementsAsync(array $args = [])
 */
class MarketplaceAgreementClient extends AwsClient {}
