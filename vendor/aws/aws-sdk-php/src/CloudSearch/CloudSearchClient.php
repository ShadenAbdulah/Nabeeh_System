<?php
namespace Aws\CloudSearch;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon CloudSearch** service.
 *
 * @method Result buildSuggesters(array $args = [])
 * @method Promise buildSuggestersAsync(array $args = [])
 * @method Result createDomain(array $args = [])
 * @method Promise createDomainAsync(array $args = [])
 * @method Result defineAnalysisScheme(array $args = [])
 * @method Promise defineAnalysisSchemeAsync(array $args = [])
 * @method Result defineExpression(array $args = [])
 * @method Promise defineExpressionAsync(array $args = [])
 * @method Result defineIndexField(array $args = [])
 * @method Promise defineIndexFieldAsync(array $args = [])
 * @method Result defineSuggester(array $args = [])
 * @method Promise defineSuggesterAsync(array $args = [])
 * @method Result deleteAnalysisScheme(array $args = [])
 * @method Promise deleteAnalysisSchemeAsync(array $args = [])
 * @method Result deleteDomain(array $args = [])
 * @method Promise deleteDomainAsync(array $args = [])
 * @method Result deleteExpression(array $args = [])
 * @method Promise deleteExpressionAsync(array $args = [])
 * @method Result deleteIndexField(array $args = [])
 * @method Promise deleteIndexFieldAsync(array $args = [])
 * @method Result deleteSuggester(array $args = [])
 * @method Promise deleteSuggesterAsync(array $args = [])
 * @method Result describeAnalysisSchemes(array $args = [])
 * @method Promise describeAnalysisSchemesAsync(array $args = [])
 * @method Result describeAvailabilityOptions(array $args = [])
 * @method Promise describeAvailabilityOptionsAsync(array $args = [])
 * @method Result describeDomainEndpointOptions(array $args = [])
 * @method Promise describeDomainEndpointOptionsAsync(array $args = [])
 * @method Result describeDomains(array $args = [])
 * @method Promise describeDomainsAsync(array $args = [])
 * @method Result describeExpressions(array $args = [])
 * @method Promise describeExpressionsAsync(array $args = [])
 * @method Result describeIndexFields(array $args = [])
 * @method Promise describeIndexFieldsAsync(array $args = [])
 * @method Result describeScalingParameters(array $args = [])
 * @method Promise describeScalingParametersAsync(array $args = [])
 * @method Result describeServiceAccessPolicies(array $args = [])
 * @method Promise describeServiceAccessPoliciesAsync(array $args = [])
 * @method Result describeSuggesters(array $args = [])
 * @method Promise describeSuggestersAsync(array $args = [])
 * @method Result indexDocuments(array $args = [])
 * @method Promise indexDocumentsAsync(array $args = [])
 * @method Result listDomainNames(array $args = [])
 * @method Promise listDomainNamesAsync(array $args = [])
 * @method Result updateAvailabilityOptions(array $args = [])
 * @method Promise updateAvailabilityOptionsAsync(array $args = [])
 * @method Result updateDomainEndpointOptions(array $args = [])
 * @method Promise updateDomainEndpointOptionsAsync(array $args = [])
 * @method Result updateScalingParameters(array $args = [])
 * @method Promise updateScalingParametersAsync(array $args = [])
 * @method Result updateServiceAccessPolicies(array $args = [])
 * @method Promise updateServiceAccessPoliciesAsync(array $args = [])
 */
class CloudSearchClient extends AwsClient {}
