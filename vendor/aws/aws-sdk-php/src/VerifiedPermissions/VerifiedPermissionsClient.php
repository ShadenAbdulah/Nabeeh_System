<?php
namespace Aws\VerifiedPermissions;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Verified Permissions** service.
 * @method Result batchIsAuthorized(array $args = [])
 * @method Promise batchIsAuthorizedAsync(array $args = [])
 * @method Result createIdentitySource(array $args = [])
 * @method Promise createIdentitySourceAsync(array $args = [])
 * @method Result createPolicy(array $args = [])
 * @method Promise createPolicyAsync(array $args = [])
 * @method Result createPolicyStore(array $args = [])
 * @method Promise createPolicyStoreAsync(array $args = [])
 * @method Result createPolicyTemplate(array $args = [])
 * @method Promise createPolicyTemplateAsync(array $args = [])
 * @method Result deleteIdentitySource(array $args = [])
 * @method Promise deleteIdentitySourceAsync(array $args = [])
 * @method Result deletePolicy(array $args = [])
 * @method Promise deletePolicyAsync(array $args = [])
 * @method Result deletePolicyStore(array $args = [])
 * @method Promise deletePolicyStoreAsync(array $args = [])
 * @method Result deletePolicyTemplate(array $args = [])
 * @method Promise deletePolicyTemplateAsync(array $args = [])
 * @method Result getIdentitySource(array $args = [])
 * @method Promise getIdentitySourceAsync(array $args = [])
 * @method Result getPolicy(array $args = [])
 * @method Promise getPolicyAsync(array $args = [])
 * @method Result getPolicyStore(array $args = [])
 * @method Promise getPolicyStoreAsync(array $args = [])
 * @method Result getPolicyTemplate(array $args = [])
 * @method Promise getPolicyTemplateAsync(array $args = [])
 * @method Result getSchema(array $args = [])
 * @method Promise getSchemaAsync(array $args = [])
 * @method Result isAuthorized(array $args = [])
 * @method Promise isAuthorizedAsync(array $args = [])
 * @method Result isAuthorizedWithToken(array $args = [])
 * @method Promise isAuthorizedWithTokenAsync(array $args = [])
 * @method Result listIdentitySources(array $args = [])
 * @method Promise listIdentitySourcesAsync(array $args = [])
 * @method Result listPolicies(array $args = [])
 * @method Promise listPoliciesAsync(array $args = [])
 * @method Result listPolicyStores(array $args = [])
 * @method Promise listPolicyStoresAsync(array $args = [])
 * @method Result listPolicyTemplates(array $args = [])
 * @method Promise listPolicyTemplatesAsync(array $args = [])
 * @method Result putSchema(array $args = [])
 * @method Promise putSchemaAsync(array $args = [])
 * @method Result updateIdentitySource(array $args = [])
 * @method Promise updateIdentitySourceAsync(array $args = [])
 * @method Result updatePolicy(array $args = [])
 * @method Promise updatePolicyAsync(array $args = [])
 * @method Result updatePolicyStore(array $args = [])
 * @method Promise updatePolicyStoreAsync(array $args = [])
 * @method Result updatePolicyTemplate(array $args = [])
 * @method Promise updatePolicyTemplateAsync(array $args = [])
 */
class VerifiedPermissionsClient extends AwsClient {}
