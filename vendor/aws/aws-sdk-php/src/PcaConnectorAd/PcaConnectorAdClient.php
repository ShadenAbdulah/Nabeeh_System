<?php
namespace Aws\PcaConnectorAd;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **PcaConnectorAd** service.
 * @method Result createConnector(array $args = [])
 * @method Promise createConnectorAsync(array $args = [])
 * @method Result createDirectoryRegistration(array $args = [])
 * @method Promise createDirectoryRegistrationAsync(array $args = [])
 * @method Result createServicePrincipalName(array $args = [])
 * @method Promise createServicePrincipalNameAsync(array $args = [])
 * @method Result createTemplate(array $args = [])
 * @method Promise createTemplateAsync(array $args = [])
 * @method Result createTemplateGroupAccessControlEntry(array $args = [])
 * @method Promise createTemplateGroupAccessControlEntryAsync(array $args = [])
 * @method Result deleteConnector(array $args = [])
 * @method Promise deleteConnectorAsync(array $args = [])
 * @method Result deleteDirectoryRegistration(array $args = [])
 * @method Promise deleteDirectoryRegistrationAsync(array $args = [])
 * @method Result deleteServicePrincipalName(array $args = [])
 * @method Promise deleteServicePrincipalNameAsync(array $args = [])
 * @method Result deleteTemplate(array $args = [])
 * @method Promise deleteTemplateAsync(array $args = [])
 * @method Result deleteTemplateGroupAccessControlEntry(array $args = [])
 * @method Promise deleteTemplateGroupAccessControlEntryAsync(array $args = [])
 * @method Result getConnector(array $args = [])
 * @method Promise getConnectorAsync(array $args = [])
 * @method Result getDirectoryRegistration(array $args = [])
 * @method Promise getDirectoryRegistrationAsync(array $args = [])
 * @method Result getServicePrincipalName(array $args = [])
 * @method Promise getServicePrincipalNameAsync(array $args = [])
 * @method Result getTemplate(array $args = [])
 * @method Promise getTemplateAsync(array $args = [])
 * @method Result getTemplateGroupAccessControlEntry(array $args = [])
 * @method Promise getTemplateGroupAccessControlEntryAsync(array $args = [])
 * @method Result listConnectors(array $args = [])
 * @method Promise listConnectorsAsync(array $args = [])
 * @method Result listDirectoryRegistrations(array $args = [])
 * @method Promise listDirectoryRegistrationsAsync(array $args = [])
 * @method Result listServicePrincipalNames(array $args = [])
 * @method Promise listServicePrincipalNamesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTemplateGroupAccessControlEntries(array $args = [])
 * @method Promise listTemplateGroupAccessControlEntriesAsync(array $args = [])
 * @method Result listTemplates(array $args = [])
 * @method Promise listTemplatesAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateTemplate(array $args = [])
 * @method Promise updateTemplateAsync(array $args = [])
 * @method Result updateTemplateGroupAccessControlEntry(array $args = [])
 * @method Promise updateTemplateGroupAccessControlEntryAsync(array $args = [])
 */
class PcaConnectorAdClient extends AwsClient {}
