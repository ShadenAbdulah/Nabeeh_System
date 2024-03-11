<?php
namespace Aws\CloudFront;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;
use InvalidArgumentException;

/**
 * This client is used to interact with the **Amazon CloudFront** service.
 *
 * @method Result createCloudFrontOriginAccessIdentity(array $args = [])
 * @method Promise createCloudFrontOriginAccessIdentityAsync(array $args = [])
 * @method Result createDistribution(array $args = [])
 * @method Promise createDistributionAsync(array $args = [])
 * @method Result createInvalidation(array $args = [])
 * @method Promise createInvalidationAsync(array $args = [])
 * @method Result createStreamingDistribution(array $args = [])
 * @method Promise createStreamingDistributionAsync(array $args = [])
 * @method Result deleteCloudFrontOriginAccessIdentity(array $args = [])
 * @method Promise deleteCloudFrontOriginAccessIdentityAsync(array $args = [])
 * @method Result deleteDistribution(array $args = [])
 * @method Promise deleteDistributionAsync(array $args = [])
 * @method Result deleteStreamingDistribution(array $args = [])
 * @method Promise deleteStreamingDistributionAsync(array $args = [])
 * @method Result getCloudFrontOriginAccessIdentity(array $args = [])
 * @method Promise getCloudFrontOriginAccessIdentityAsync(array $args = [])
 * @method Result getCloudFrontOriginAccessIdentityConfig(array $args = [])
 * @method Promise getCloudFrontOriginAccessIdentityConfigAsync(array $args = [])
 * @method Result getDistribution(array $args = [])
 * @method Promise getDistributionAsync(array $args = [])
 * @method Result getDistributionConfig(array $args = [])
 * @method Promise getDistributionConfigAsync(array $args = [])
 * @method Result getInvalidation(array $args = [])
 * @method Promise getInvalidationAsync(array $args = [])
 * @method Result getStreamingDistribution(array $args = [])
 * @method Promise getStreamingDistributionAsync(array $args = [])
 * @method Result getStreamingDistributionConfig(array $args = [])
 * @method Promise getStreamingDistributionConfigAsync(array $args = [])
 * @method Result listCloudFrontOriginAccessIdentities(array $args = [])
 * @method Promise listCloudFrontOriginAccessIdentitiesAsync(array $args = [])
 * @method Result listDistributions(array $args = [])
 * @method Promise listDistributionsAsync(array $args = [])
 * @method Result listDistributionsByWebACLId(array $args = [])
 * @method Promise listDistributionsByWebACLIdAsync(array $args = [])
 * @method Result listInvalidations(array $args = [])
 * @method Promise listInvalidationsAsync(array $args = [])
 * @method Result listStreamingDistributions(array $args = [])
 * @method Promise listStreamingDistributionsAsync(array $args = [])
 * @method Result updateCloudFrontOriginAccessIdentity(array $args = [])
 * @method Promise updateCloudFrontOriginAccessIdentityAsync(array $args = [])
 * @method Result updateDistribution(array $args = [])
 * @method Promise updateDistributionAsync(array $args = [])
 * @method Result updateStreamingDistribution(array $args = [])
 * @method Promise updateStreamingDistributionAsync(array $args = [])
 * @method Result createDistributionWithTags(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25, 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise createDistributionWithTagsAsync(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25, 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result createStreamingDistributionWithTags(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25, 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise createStreamingDistributionWithTagsAsync(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25, 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result listTagsForResource(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25, 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise listTagsForResourceAsync(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25, 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result tagResource(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25, 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise tagResourceAsync(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25, 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result untagResource(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25, 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise untagResourceAsync(array $args = []) (supported in versions 2016-08-01, 2016-08-20, 2016-09-07, 2016-09-29, 2016-11-25, 2017-03-25, 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result deleteServiceLinkedRole(array $args = []) (supported in versions 2017-03-25)
 * @method Promise deleteServiceLinkedRoleAsync(array $args = []) (supported in versions 2017-03-25)
 * @method Result createFieldLevelEncryptionConfig(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise createFieldLevelEncryptionConfigAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result createFieldLevelEncryptionProfile(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise createFieldLevelEncryptionProfileAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result createPublicKey(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise createPublicKeyAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result deleteFieldLevelEncryptionConfig(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise deleteFieldLevelEncryptionConfigAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result deleteFieldLevelEncryptionProfile(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise deleteFieldLevelEncryptionProfileAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result deletePublicKey(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise deletePublicKeyAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result getFieldLevelEncryption(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise getFieldLevelEncryptionAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result getFieldLevelEncryptionConfig(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise getFieldLevelEncryptionConfigAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result getFieldLevelEncryptionProfile(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise getFieldLevelEncryptionProfileAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result getFieldLevelEncryptionProfileConfig(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise getFieldLevelEncryptionProfileConfigAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result getPublicKey(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise getPublicKeyAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result getPublicKeyConfig(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise getPublicKeyConfigAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result listFieldLevelEncryptionConfigs(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise listFieldLevelEncryptionConfigsAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result listFieldLevelEncryptionProfiles(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise listFieldLevelEncryptionProfilesAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result listPublicKeys(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise listPublicKeysAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result updateFieldLevelEncryptionConfig(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise updateFieldLevelEncryptionConfigAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result updateFieldLevelEncryptionProfile(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise updateFieldLevelEncryptionProfileAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result updatePublicKey(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Promise updatePublicKeyAsync(array $args = []) (supported in versions 2017-10-30, 2018-06-18, 2018-11-05, 2019-03-26, 2020-05-31)
 * @method Result associateAlias(array $args = []) (supported in versions 2020-05-31)
 * @method Promise associateAliasAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result copyDistribution(array $args = []) (supported in versions 2020-05-31)
 * @method Promise copyDistributionAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result createCachePolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise createCachePolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result createContinuousDeploymentPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise createContinuousDeploymentPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result createFunction(array $args = []) (supported in versions 2020-05-31)
 * @method Promise createFunctionAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result createKeyGroup(array $args = []) (supported in versions 2020-05-31)
 * @method Promise createKeyGroupAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result createKeyValueStore(array $args = []) (supported in versions 2020-05-31)
 * @method Promise createKeyValueStoreAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result createMonitoringSubscription(array $args = []) (supported in versions 2020-05-31)
 * @method Promise createMonitoringSubscriptionAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result createOriginAccessControl(array $args = []) (supported in versions 2020-05-31)
 * @method Promise createOriginAccessControlAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result createOriginRequestPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise createOriginRequestPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result createRealtimeLogConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise createRealtimeLogConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result createResponseHeadersPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise createResponseHeadersPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result deleteCachePolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise deleteCachePolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result deleteContinuousDeploymentPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise deleteContinuousDeploymentPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result deleteFunction(array $args = []) (supported in versions 2020-05-31)
 * @method Promise deleteFunctionAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result deleteKeyGroup(array $args = []) (supported in versions 2020-05-31)
 * @method Promise deleteKeyGroupAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result deleteKeyValueStore(array $args = []) (supported in versions 2020-05-31)
 * @method Promise deleteKeyValueStoreAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result deleteMonitoringSubscription(array $args = []) (supported in versions 2020-05-31)
 * @method Promise deleteMonitoringSubscriptionAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result deleteOriginAccessControl(array $args = []) (supported in versions 2020-05-31)
 * @method Promise deleteOriginAccessControlAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result deleteOriginRequestPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise deleteOriginRequestPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result deleteRealtimeLogConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise deleteRealtimeLogConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result deleteResponseHeadersPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise deleteResponseHeadersPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result describeFunction(array $args = []) (supported in versions 2020-05-31)
 * @method Promise describeFunctionAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result describeKeyValueStore(array $args = []) (supported in versions 2020-05-31)
 * @method Promise describeKeyValueStoreAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getCachePolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getCachePolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getCachePolicyConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getCachePolicyConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getContinuousDeploymentPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getContinuousDeploymentPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getContinuousDeploymentPolicyConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getContinuousDeploymentPolicyConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getFunction(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getFunctionAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getKeyGroup(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getKeyGroupAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getKeyGroupConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getKeyGroupConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getMonitoringSubscription(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getMonitoringSubscriptionAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getOriginAccessControl(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getOriginAccessControlAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getOriginAccessControlConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getOriginAccessControlConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getOriginRequestPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getOriginRequestPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getOriginRequestPolicyConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getOriginRequestPolicyConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getRealtimeLogConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getRealtimeLogConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getResponseHeadersPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getResponseHeadersPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result getResponseHeadersPolicyConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise getResponseHeadersPolicyConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listCachePolicies(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listCachePoliciesAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listConflictingAliases(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listConflictingAliasesAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listContinuousDeploymentPolicies(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listContinuousDeploymentPoliciesAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listDistributionsByCachePolicyId(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listDistributionsByCachePolicyIdAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listDistributionsByKeyGroup(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listDistributionsByKeyGroupAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listDistributionsByOriginRequestPolicyId(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listDistributionsByOriginRequestPolicyIdAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listDistributionsByRealtimeLogConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listDistributionsByRealtimeLogConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listDistributionsByResponseHeadersPolicyId(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listDistributionsByResponseHeadersPolicyIdAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listFunctions(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listFunctionsAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listKeyGroups(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listKeyGroupsAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listKeyValueStores(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listKeyValueStoresAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listOriginAccessControls(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listOriginAccessControlsAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listOriginRequestPolicies(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listOriginRequestPoliciesAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listRealtimeLogConfigs(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listRealtimeLogConfigsAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result listResponseHeadersPolicies(array $args = []) (supported in versions 2020-05-31)
 * @method Promise listResponseHeadersPoliciesAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result publishFunction(array $args = []) (supported in versions 2020-05-31)
 * @method Promise publishFunctionAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result testFunction(array $args = []) (supported in versions 2020-05-31)
 * @method Promise testFunctionAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result updateCachePolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise updateCachePolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result updateContinuousDeploymentPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise updateContinuousDeploymentPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result updateDistributionWithStagingConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise updateDistributionWithStagingConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result updateFunction(array $args = []) (supported in versions 2020-05-31)
 * @method Promise updateFunctionAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result updateKeyGroup(array $args = []) (supported in versions 2020-05-31)
 * @method Promise updateKeyGroupAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result updateKeyValueStore(array $args = []) (supported in versions 2020-05-31)
 * @method Promise updateKeyValueStoreAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result updateOriginAccessControl(array $args = []) (supported in versions 2020-05-31)
 * @method Promise updateOriginAccessControlAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result updateOriginRequestPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise updateOriginRequestPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result updateRealtimeLogConfig(array $args = []) (supported in versions 2020-05-31)
 * @method Promise updateRealtimeLogConfigAsync(array $args = []) (supported in versions 2020-05-31)
 * @method Result updateResponseHeadersPolicy(array $args = []) (supported in versions 2020-05-31)
 * @method Promise updateResponseHeadersPolicyAsync(array $args = []) (supported in versions 2020-05-31)
 */
class CloudFrontClient extends AwsClient
{
    /**
     * Create a signed Amazon CloudFront URL.
     *
     * This method accepts an array of configuration options:
     *
     * - url: (string)  URL of the resource being signed (can include query
     *   string and wildcards). For example: rtmp://s5c39gqb8ow64r.cloudfront.net/videos/mp3_name.mp3
     *   http://d111111abcdef8.cloudfront.net/images/horizon.jpg?size=large&license=yes
     * - policy: (string) JSON policy. Use this option when creating a signed
     *   URL for a custom policy.
     * - expires: (int) UTC Unix timestamp used when signing with a canned
     *   policy. Not required when passing a custom 'policy' option.
     * - key_pair_id: (string) The ID of the key pair used to sign CloudFront
     *   URLs for private distributions.
     * - private_key: (string) The filepath to the private key used to sign
     *   CloudFront URLs for private distributions.
     *
     * @param array $options Array of configuration options used when signing
     *
     * @return string Signed URL with authentication parameters
     * @throws InvalidArgumentException if url, key_pair_id, or private_key
     *     were not specified.
     * @link http://docs.aws.amazon.com/AmazonCloudFront/latest/DeveloperGuide/WorkingWithStreamingDistributions.html
     */
    public function getSignedUrl(array $options)
    {
        foreach (['url', 'key_pair_id', 'private_key'] as $required) {
            if (!isset($options[$required])) {
                throw new InvalidArgumentException("$required is required");
            }
        }

        $urlSigner = new UrlSigner(
            $options['key_pair_id'],
            $options['private_key']
        );

        return $urlSigner->getSignedUrl(
            $options['url'],
            isset($options['expires']) ? $options['expires'] : null,
            isset($options['policy']) ? $options['policy'] : null
        );
    }

    /**
     * Create a signed Amazon CloudFront cookie.
     *
     * This method accepts an array of configuration options:
     *
     * - url: (string)  URL of the resource being signed (can include query
     *   string and wildcards). For example: http://d111111abcdef8.cloudfront.net/images/horizon.jpg?size=large&license=yes
     * - policy: (string) JSON policy. Use this option when creating a signed
     *   URL for a custom policy.
     * - expires: (int) UTC Unix timestamp used when signing with a canned
     *   policy. Not required when passing a custom 'policy' option.
     * - key_pair_id: (string) The ID of the key pair used to sign CloudFront
     *   URLs for private distributions.
     * - private_key: (string) The filepath ot the private key used to sign
     *   CloudFront URLs for private distributions.
     *
     * @param array $options Array of configuration options used when signing
     *
     * @return array Key => value pairs of signed cookies to set
     * @throws InvalidArgumentException if url, key_pair_id, or private_key
     *     were not specified.
     * @link http://docs.aws.amazon.com/AmazonCloudFront/latest/DeveloperGuide/WorkingWithStreamingDistributions.html
     */
    public function getSignedCookie(array $options)
    {
        foreach (['key_pair_id', 'private_key'] as $required) {
            if (!isset($options[$required])) {
                throw new InvalidArgumentException("$required is required");
            }
        }

        $cookieSigner = new CookieSigner(
            $options['key_pair_id'],
            $options['private_key']
        );

        return $cookieSigner->getSignedCookie(
            isset($options['url']) ? $options['url'] : null,
            isset($options['expires']) ? $options['expires'] : null,
            isset($options['policy']) ? $options['policy'] : null
        );
    }
}
