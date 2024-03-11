<?php
namespace Aws\Acm;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Certificate Manager** service.
 *
 * @method Result addTagsToCertificate(array $args = [])
 * @method Promise addTagsToCertificateAsync(array $args = [])
 * @method Result deleteCertificate(array $args = [])
 * @method Promise deleteCertificateAsync(array $args = [])
 * @method Result describeCertificate(array $args = [])
 * @method Promise describeCertificateAsync(array $args = [])
 * @method Result exportCertificate(array $args = [])
 * @method Promise exportCertificateAsync(array $args = [])
 * @method Result getAccountConfiguration(array $args = [])
 * @method Promise getAccountConfigurationAsync(array $args = [])
 * @method Result getCertificate(array $args = [])
 * @method Promise getCertificateAsync(array $args = [])
 * @method Result importCertificate(array $args = [])
 * @method Promise importCertificateAsync(array $args = [])
 * @method Result listCertificates(array $args = [])
 * @method Promise listCertificatesAsync(array $args = [])
 * @method Result listTagsForCertificate(array $args = [])
 * @method Promise listTagsForCertificateAsync(array $args = [])
 * @method Result putAccountConfiguration(array $args = [])
 * @method Promise putAccountConfigurationAsync(array $args = [])
 * @method Result removeTagsFromCertificate(array $args = [])
 * @method Promise removeTagsFromCertificateAsync(array $args = [])
 * @method Result renewCertificate(array $args = [])
 * @method Promise renewCertificateAsync(array $args = [])
 * @method Result requestCertificate(array $args = [])
 * @method Promise requestCertificateAsync(array $args = [])
 * @method Result resendValidationEmail(array $args = [])
 * @method Promise resendValidationEmailAsync(array $args = [])
 * @method Result updateCertificateOptions(array $args = [])
 * @method Promise updateCertificateOptionsAsync(array $args = [])
 */
class AcmClient extends AwsClient {}
