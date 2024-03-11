<?php
namespace Aws\PaymentCryptographyData;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Payment Cryptography Data Plane** service.
 * @method Result decryptData(array $args = [])
 * @method Promise decryptDataAsync(array $args = [])
 * @method Result encryptData(array $args = [])
 * @method Promise encryptDataAsync(array $args = [])
 * @method Result generateCardValidationData(array $args = [])
 * @method Promise generateCardValidationDataAsync(array $args = [])
 * @method Result generateMac(array $args = [])
 * @method Promise generateMacAsync(array $args = [])
 * @method Result generatePinData(array $args = [])
 * @method Promise generatePinDataAsync(array $args = [])
 * @method Result reEncryptData(array $args = [])
 * @method Promise reEncryptDataAsync(array $args = [])
 * @method Result translatePinData(array $args = [])
 * @method Promise translatePinDataAsync(array $args = [])
 * @method Result verifyAuthRequestCryptogram(array $args = [])
 * @method Promise verifyAuthRequestCryptogramAsync(array $args = [])
 * @method Result verifyCardValidationData(array $args = [])
 * @method Promise verifyCardValidationDataAsync(array $args = [])
 * @method Result verifyMac(array $args = [])
 * @method Promise verifyMacAsync(array $args = [])
 * @method Result verifyPinData(array $args = [])
 * @method Promise verifyPinDataAsync(array $args = [])
 */
class PaymentCryptographyDataClient extends AwsClient {}
