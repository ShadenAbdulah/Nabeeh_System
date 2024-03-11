<?php
namespace Aws\ACMPCA;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Certificate Manager Private Certificate Authority** service.
 * @method Result createCertificateAuthority(array $args = [])
 * @method Promise createCertificateAuthorityAsync(array $args = [])
 * @method Result createCertificateAuthorityAuditReport(array $args = [])
 * @method Promise createCertificateAuthorityAuditReportAsync(array $args = [])
 * @method Result createPermission(array $args = [])
 * @method Promise createPermissionAsync(array $args = [])
 * @method Result deleteCertificateAuthority(array $args = [])
 * @method Promise deleteCertificateAuthorityAsync(array $args = [])
 * @method Result deletePermission(array $args = [])
 * @method Promise deletePermissionAsync(array $args = [])
 * @method Result deletePolicy(array $args = [])
 * @method Promise deletePolicyAsync(array $args = [])
 * @method Result describeCertificateAuthority(array $args = [])
 * @method Promise describeCertificateAuthorityAsync(array $args = [])
 * @method Result describeCertificateAuthorityAuditReport(array $args = [])
 * @method Promise describeCertificateAuthorityAuditReportAsync(array $args = [])
 * @method Result getCertificate(array $args = [])
 * @method Promise getCertificateAsync(array $args = [])
 * @method Result getCertificateAuthorityCertificate(array $args = [])
 * @method Promise getCertificateAuthorityCertificateAsync(array $args = [])
 * @method Result getCertificateAuthorityCsr(array $args = [])
 * @method Promise getCertificateAuthorityCsrAsync(array $args = [])
 * @method Result getPolicy(array $args = [])
 * @method Promise getPolicyAsync(array $args = [])
 * @method Result importCertificateAuthorityCertificate(array $args = [])
 * @method Promise importCertificateAuthorityCertificateAsync(array $args = [])
 * @method Result issueCertificate(array $args = [])
 * @method Promise issueCertificateAsync(array $args = [])
 * @method Result listCertificateAuthorities(array $args = [])
 * @method Promise listCertificateAuthoritiesAsync(array $args = [])
 * @method Result listPermissions(array $args = [])
 * @method Promise listPermissionsAsync(array $args = [])
 * @method Result listTags(array $args = [])
 * @method Promise listTagsAsync(array $args = [])
 * @method Result putPolicy(array $args = [])
 * @method Promise putPolicyAsync(array $args = [])
 * @method Result restoreCertificateAuthority(array $args = [])
 * @method Promise restoreCertificateAuthorityAsync(array $args = [])
 * @method Result revokeCertificate(array $args = [])
 * @method Promise revokeCertificateAsync(array $args = [])
 * @method Result tagCertificateAuthority(array $args = [])
 * @method Promise tagCertificateAuthorityAsync(array $args = [])
 * @method Result untagCertificateAuthority(array $args = [])
 * @method Promise untagCertificateAuthorityAsync(array $args = [])
 * @method Result updateCertificateAuthority(array $args = [])
 * @method Promise updateCertificateAuthorityAsync(array $args = [])
 */
class ACMPCAClient extends AwsClient {}
