<?php
namespace Aws\ServiceQuotas;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Service Quotas** service.
 * @method Result associateServiceQuotaTemplate(array $args = [])
 * @method Promise associateServiceQuotaTemplateAsync(array $args = [])
 * @method Result deleteServiceQuotaIncreaseRequestFromTemplate(array $args = [])
 * @method Promise deleteServiceQuotaIncreaseRequestFromTemplateAsync(array $args = [])
 * @method Result disassociateServiceQuotaTemplate(array $args = [])
 * @method Promise disassociateServiceQuotaTemplateAsync(array $args = [])
 * @method Result getAWSDefaultServiceQuota(array $args = [])
 * @method Promise getAWSDefaultServiceQuotaAsync(array $args = [])
 * @method Result getAssociationForServiceQuotaTemplate(array $args = [])
 * @method Promise getAssociationForServiceQuotaTemplateAsync(array $args = [])
 * @method Result getRequestedServiceQuotaChange(array $args = [])
 * @method Promise getRequestedServiceQuotaChangeAsync(array $args = [])
 * @method Result getServiceQuota(array $args = [])
 * @method Promise getServiceQuotaAsync(array $args = [])
 * @method Result getServiceQuotaIncreaseRequestFromTemplate(array $args = [])
 * @method Promise getServiceQuotaIncreaseRequestFromTemplateAsync(array $args = [])
 * @method Result listAWSDefaultServiceQuotas(array $args = [])
 * @method Promise listAWSDefaultServiceQuotasAsync(array $args = [])
 * @method Result listRequestedServiceQuotaChangeHistory(array $args = [])
 * @method Promise listRequestedServiceQuotaChangeHistoryAsync(array $args = [])
 * @method Result listRequestedServiceQuotaChangeHistoryByQuota(array $args = [])
 * @method Promise listRequestedServiceQuotaChangeHistoryByQuotaAsync(array $args = [])
 * @method Result listServiceQuotaIncreaseRequestsInTemplate(array $args = [])
 * @method Promise listServiceQuotaIncreaseRequestsInTemplateAsync(array $args = [])
 * @method Result listServiceQuotas(array $args = [])
 * @method Promise listServiceQuotasAsync(array $args = [])
 * @method Result listServices(array $args = [])
 * @method Promise listServicesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putServiceQuotaIncreaseRequestIntoTemplate(array $args = [])
 * @method Promise putServiceQuotaIncreaseRequestIntoTemplateAsync(array $args = [])
 * @method Result requestServiceQuotaIncrease(array $args = [])
 * @method Promise requestServiceQuotaIncreaseAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class ServiceQuotasClient extends AwsClient {}
