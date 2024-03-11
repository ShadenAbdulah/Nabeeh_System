<?php
namespace Aws\PaymentCryptography;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Payment Cryptography Control Plane** service.
 * @method Result createAlias(array $args = [])
 * @method Promise createAliasAsync(array $args = [])
 * @method Result createKey(array $args = [])
 * @method Promise createKeyAsync(array $args = [])
 * @method Result deleteAlias(array $args = [])
 * @method Promise deleteAliasAsync(array $args = [])
 * @method Result deleteKey(array $args = [])
 * @method Promise deleteKeyAsync(array $args = [])
 * @method Result exportKey(array $args = [])
 * @method Promise exportKeyAsync(array $args = [])
 * @method Result getAlias(array $args = [])
 * @method Promise getAliasAsync(array $args = [])
 * @method Result getKey(array $args = [])
 * @method Promise getKeyAsync(array $args = [])
 * @method Result getParametersForExport(array $args = [])
 * @method Promise getParametersForExportAsync(array $args = [])
 * @method Result getParametersForImport(array $args = [])
 * @method Promise getParametersForImportAsync(array $args = [])
 * @method Result getPublicKeyCertificate(array $args = [])
 * @method Promise getPublicKeyCertificateAsync(array $args = [])
 * @method Result importKey(array $args = [])
 * @method Promise importKeyAsync(array $args = [])
 * @method Result listAliases(array $args = [])
 * @method Promise listAliasesAsync(array $args = [])
 * @method Result listKeys(array $args = [])
 * @method Promise listKeysAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result restoreKey(array $args = [])
 * @method Promise restoreKeyAsync(array $args = [])
 * @method Result startKeyUsage(array $args = [])
 * @method Promise startKeyUsageAsync(array $args = [])
 * @method Result stopKeyUsage(array $args = [])
 * @method Promise stopKeyUsageAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAlias(array $args = [])
 * @method Promise updateAliasAsync(array $args = [])
 */
class PaymentCryptographyClient extends AwsClient {}
