<?php
namespace Aws\Route53;

use Aws\AwsClient;
use Aws\CommandInterface;
use Aws\Result;
use GuzzleHttp\Promise\Promise;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Amazon Route 53** service.
 *
 * @method Result activateKeySigningKey(array $args = [])
 * @method Promise activateKeySigningKeyAsync(array $args = [])
 * @method Result associateVPCWithHostedZone(array $args = [])
 * @method Promise associateVPCWithHostedZoneAsync(array $args = [])
 * @method Result changeCidrCollection(array $args = [])
 * @method Promise changeCidrCollectionAsync(array $args = [])
 * @method Result changeResourceRecordSets(array $args = [])
 * @method Promise changeResourceRecordSetsAsync(array $args = [])
 * @method Result changeTagsForResource(array $args = [])
 * @method Promise changeTagsForResourceAsync(array $args = [])
 * @method Result createCidrCollection(array $args = [])
 * @method Promise createCidrCollectionAsync(array $args = [])
 * @method Result createHealthCheck(array $args = [])
 * @method Promise createHealthCheckAsync(array $args = [])
 * @method Result createHostedZone(array $args = [])
 * @method Promise createHostedZoneAsync(array $args = [])
 * @method Result createKeySigningKey(array $args = [])
 * @method Promise createKeySigningKeyAsync(array $args = [])
 * @method Result createQueryLoggingConfig(array $args = [])
 * @method Promise createQueryLoggingConfigAsync(array $args = [])
 * @method Result createReusableDelegationSet(array $args = [])
 * @method Promise createReusableDelegationSetAsync(array $args = [])
 * @method Result createTrafficPolicy(array $args = [])
 * @method Promise createTrafficPolicyAsync(array $args = [])
 * @method Result createTrafficPolicyInstance(array $args = [])
 * @method Promise createTrafficPolicyInstanceAsync(array $args = [])
 * @method Result createTrafficPolicyVersion(array $args = [])
 * @method Promise createTrafficPolicyVersionAsync(array $args = [])
 * @method Result createVPCAssociationAuthorization(array $args = [])
 * @method Promise createVPCAssociationAuthorizationAsync(array $args = [])
 * @method Result deactivateKeySigningKey(array $args = [])
 * @method Promise deactivateKeySigningKeyAsync(array $args = [])
 * @method Result deleteCidrCollection(array $args = [])
 * @method Promise deleteCidrCollectionAsync(array $args = [])
 * @method Result deleteHealthCheck(array $args = [])
 * @method Promise deleteHealthCheckAsync(array $args = [])
 * @method Result deleteHostedZone(array $args = [])
 * @method Promise deleteHostedZoneAsync(array $args = [])
 * @method Result deleteKeySigningKey(array $args = [])
 * @method Promise deleteKeySigningKeyAsync(array $args = [])
 * @method Result deleteQueryLoggingConfig(array $args = [])
 * @method Promise deleteQueryLoggingConfigAsync(array $args = [])
 * @method Result deleteReusableDelegationSet(array $args = [])
 * @method Promise deleteReusableDelegationSetAsync(array $args = [])
 * @method Result deleteTrafficPolicy(array $args = [])
 * @method Promise deleteTrafficPolicyAsync(array $args = [])
 * @method Result deleteTrafficPolicyInstance(array $args = [])
 * @method Promise deleteTrafficPolicyInstanceAsync(array $args = [])
 * @method Result deleteVPCAssociationAuthorization(array $args = [])
 * @method Promise deleteVPCAssociationAuthorizationAsync(array $args = [])
 * @method Result disableHostedZoneDNSSEC(array $args = [])
 * @method Promise disableHostedZoneDNSSECAsync(array $args = [])
 * @method Result disassociateVPCFromHostedZone(array $args = [])
 * @method Promise disassociateVPCFromHostedZoneAsync(array $args = [])
 * @method Result enableHostedZoneDNSSEC(array $args = [])
 * @method Promise enableHostedZoneDNSSECAsync(array $args = [])
 * @method Result getAccountLimit(array $args = [])
 * @method Promise getAccountLimitAsync(array $args = [])
 * @method Result getChange(array $args = [])
 * @method Promise getChangeAsync(array $args = [])
 * @method Result getCheckerIpRanges(array $args = [])
 * @method Promise getCheckerIpRangesAsync(array $args = [])
 * @method Result getDNSSEC(array $args = [])
 * @method Promise getDNSSECAsync(array $args = [])
 * @method Result getGeoLocation(array $args = [])
 * @method Promise getGeoLocationAsync(array $args = [])
 * @method Result getHealthCheck(array $args = [])
 * @method Promise getHealthCheckAsync(array $args = [])
 * @method Result getHealthCheckCount(array $args = [])
 * @method Promise getHealthCheckCountAsync(array $args = [])
 * @method Result getHealthCheckLastFailureReason(array $args = [])
 * @method Promise getHealthCheckLastFailureReasonAsync(array $args = [])
 * @method Result getHealthCheckStatus(array $args = [])
 * @method Promise getHealthCheckStatusAsync(array $args = [])
 * @method Result getHostedZone(array $args = [])
 * @method Promise getHostedZoneAsync(array $args = [])
 * @method Result getHostedZoneCount(array $args = [])
 * @method Promise getHostedZoneCountAsync(array $args = [])
 * @method Result getHostedZoneLimit(array $args = [])
 * @method Promise getHostedZoneLimitAsync(array $args = [])
 * @method Result getQueryLoggingConfig(array $args = [])
 * @method Promise getQueryLoggingConfigAsync(array $args = [])
 * @method Result getReusableDelegationSet(array $args = [])
 * @method Promise getReusableDelegationSetAsync(array $args = [])
 * @method Result getReusableDelegationSetLimit(array $args = [])
 * @method Promise getReusableDelegationSetLimitAsync(array $args = [])
 * @method Result getTrafficPolicy(array $args = [])
 * @method Promise getTrafficPolicyAsync(array $args = [])
 * @method Result getTrafficPolicyInstance(array $args = [])
 * @method Promise getTrafficPolicyInstanceAsync(array $args = [])
 * @method Result getTrafficPolicyInstanceCount(array $args = [])
 * @method Promise getTrafficPolicyInstanceCountAsync(array $args = [])
 * @method Result listCidrBlocks(array $args = [])
 * @method Promise listCidrBlocksAsync(array $args = [])
 * @method Result listCidrCollections(array $args = [])
 * @method Promise listCidrCollectionsAsync(array $args = [])
 * @method Result listCidrLocations(array $args = [])
 * @method Promise listCidrLocationsAsync(array $args = [])
 * @method Result listGeoLocations(array $args = [])
 * @method Promise listGeoLocationsAsync(array $args = [])
 * @method Result listHealthChecks(array $args = [])
 * @method Promise listHealthChecksAsync(array $args = [])
 * @method Result listHostedZones(array $args = [])
 * @method Promise listHostedZonesAsync(array $args = [])
 * @method Result listHostedZonesByName(array $args = [])
 * @method Promise listHostedZonesByNameAsync(array $args = [])
 * @method Result listHostedZonesByVPC(array $args = [])
 * @method Promise listHostedZonesByVPCAsync(array $args = [])
 * @method Result listQueryLoggingConfigs(array $args = [])
 * @method Promise listQueryLoggingConfigsAsync(array $args = [])
 * @method Result listResourceRecordSets(array $args = [])
 * @method Promise listResourceRecordSetsAsync(array $args = [])
 * @method Result listReusableDelegationSets(array $args = [])
 * @method Promise listReusableDelegationSetsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTagsForResources(array $args = [])
 * @method Promise listTagsForResourcesAsync(array $args = [])
 * @method Result listTrafficPolicies(array $args = [])
 * @method Promise listTrafficPoliciesAsync(array $args = [])
 * @method Result listTrafficPolicyInstances(array $args = [])
 * @method Promise listTrafficPolicyInstancesAsync(array $args = [])
 * @method Result listTrafficPolicyInstancesByHostedZone(array $args = [])
 * @method Promise listTrafficPolicyInstancesByHostedZoneAsync(array $args = [])
 * @method Result listTrafficPolicyInstancesByPolicy(array $args = [])
 * @method Promise listTrafficPolicyInstancesByPolicyAsync(array $args = [])
 * @method Result listTrafficPolicyVersions(array $args = [])
 * @method Promise listTrafficPolicyVersionsAsync(array $args = [])
 * @method Result listVPCAssociationAuthorizations(array $args = [])
 * @method Promise listVPCAssociationAuthorizationsAsync(array $args = [])
 * @method Result testDNSAnswer(array $args = [])
 * @method Promise testDNSAnswerAsync(array $args = [])
 * @method Result updateHealthCheck(array $args = [])
 * @method Promise updateHealthCheckAsync(array $args = [])
 * @method Result updateHostedZoneComment(array $args = [])
 * @method Promise updateHostedZoneCommentAsync(array $args = [])
 * @method Result updateTrafficPolicyComment(array $args = [])
 * @method Promise updateTrafficPolicyCommentAsync(array $args = [])
 * @method Result updateTrafficPolicyInstance(array $args = [])
 * @method Promise updateTrafficPolicyInstanceAsync(array $args = [])
 */
class Route53Client extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);
        $this->getHandlerList()->appendInit($this->cleanIdFn(), 'route53.clean_id');
    }

    private function cleanIdFn()
    {
        return function (callable $handler) {
            return function (CommandInterface $c, RequestInterface $r = null) use ($handler) {
                foreach (['Id', 'HostedZoneId', 'DelegationSetId'] as $clean) {
                    if ($c->hasParam($clean)) {
                        $c[$clean] = $this->cleanId($c[$clean]);
                    }
                }
                return $handler($c, $r);
            };
        };
    }

    private function cleanId($id)
    {
        static $toClean = ['/hostedzone/', '/change/', '/delegationset/'];

        return str_replace($toClean, '', $id);
    }
}
