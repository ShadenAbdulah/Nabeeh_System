<?php
namespace Aws\AppRegistry;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Service Catalog App Registry** service.
 * @method Result associateAttributeGroup(array $args = [])
 * @method Promise associateAttributeGroupAsync(array $args = [])
 * @method Result associateResource(array $args = [])
 * @method Promise associateResourceAsync(array $args = [])
 * @method Result createApplication(array $args = [])
 * @method Promise createApplicationAsync(array $args = [])
 * @method Result createAttributeGroup(array $args = [])
 * @method Promise createAttributeGroupAsync(array $args = [])
 * @method Result deleteApplication(array $args = [])
 * @method Promise deleteApplicationAsync(array $args = [])
 * @method Result deleteAttributeGroup(array $args = [])
 * @method Promise deleteAttributeGroupAsync(array $args = [])
 * @method Result disassociateAttributeGroup(array $args = [])
 * @method Promise disassociateAttributeGroupAsync(array $args = [])
 * @method Result disassociateResource(array $args = [])
 * @method Promise disassociateResourceAsync(array $args = [])
 * @method Result getApplication(array $args = [])
 * @method Promise getApplicationAsync(array $args = [])
 * @method Result getAssociatedResource(array $args = [])
 * @method Promise getAssociatedResourceAsync(array $args = [])
 * @method Result getAttributeGroup(array $args = [])
 * @method Promise getAttributeGroupAsync(array $args = [])
 * @method Result getConfiguration(array $args = [])
 * @method Promise getConfigurationAsync(array $args = [])
 * @method Result listApplications(array $args = [])
 * @method Promise listApplicationsAsync(array $args = [])
 * @method Result listAssociatedAttributeGroups(array $args = [])
 * @method Promise listAssociatedAttributeGroupsAsync(array $args = [])
 * @method Result listAssociatedResources(array $args = [])
 * @method Promise listAssociatedResourcesAsync(array $args = [])
 * @method Result listAttributeGroups(array $args = [])
 * @method Promise listAttributeGroupsAsync(array $args = [])
 * @method Result listAttributeGroupsForApplication(array $args = [])
 * @method Promise listAttributeGroupsForApplicationAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putConfiguration(array $args = [])
 * @method Promise putConfigurationAsync(array $args = [])
 * @method Result syncResource(array $args = [])
 * @method Promise syncResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateApplication(array $args = [])
 * @method Promise updateApplicationAsync(array $args = [])
 * @method Result updateAttributeGroup(array $args = [])
 * @method Promise updateAttributeGroupAsync(array $args = [])
 */
class AppRegistryClient extends AwsClient {}
