<?php
namespace Aws\EventBridge;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon EventBridge** service.
 * @method Result activateEventSource(array $args = [])
 * @method Promise activateEventSourceAsync(array $args = [])
 * @method Result cancelReplay(array $args = [])
 * @method Promise cancelReplayAsync(array $args = [])
 * @method Result createApiDestination(array $args = [])
 * @method Promise createApiDestinationAsync(array $args = [])
 * @method Result createArchive(array $args = [])
 * @method Promise createArchiveAsync(array $args = [])
 * @method Result createConnection(array $args = [])
 * @method Promise createConnectionAsync(array $args = [])
 * @method Result createEndpoint(array $args = [])
 * @method Promise createEndpointAsync(array $args = [])
 * @method Result createEventBus(array $args = [])
 * @method Promise createEventBusAsync(array $args = [])
 * @method Result createPartnerEventSource(array $args = [])
 * @method Promise createPartnerEventSourceAsync(array $args = [])
 * @method Result deactivateEventSource(array $args = [])
 * @method Promise deactivateEventSourceAsync(array $args = [])
 * @method Result deauthorizeConnection(array $args = [])
 * @method Promise deauthorizeConnectionAsync(array $args = [])
 * @method Result deleteApiDestination(array $args = [])
 * @method Promise deleteApiDestinationAsync(array $args = [])
 * @method Result deleteArchive(array $args = [])
 * @method Promise deleteArchiveAsync(array $args = [])
 * @method Result deleteConnection(array $args = [])
 * @method Promise deleteConnectionAsync(array $args = [])
 * @method Result deleteEndpoint(array $args = [])
 * @method Promise deleteEndpointAsync(array $args = [])
 * @method Result deleteEventBus(array $args = [])
 * @method Promise deleteEventBusAsync(array $args = [])
 * @method Result deletePartnerEventSource(array $args = [])
 * @method Promise deletePartnerEventSourceAsync(array $args = [])
 * @method Result deleteRule(array $args = [])
 * @method Promise deleteRuleAsync(array $args = [])
 * @method Result describeApiDestination(array $args = [])
 * @method Promise describeApiDestinationAsync(array $args = [])
 * @method Result describeArchive(array $args = [])
 * @method Promise describeArchiveAsync(array $args = [])
 * @method Result describeConnection(array $args = [])
 * @method Promise describeConnectionAsync(array $args = [])
 * @method Result describeEndpoint(array $args = [])
 * @method Promise describeEndpointAsync(array $args = [])
 * @method Result describeEventBus(array $args = [])
 * @method Promise describeEventBusAsync(array $args = [])
 * @method Result describeEventSource(array $args = [])
 * @method Promise describeEventSourceAsync(array $args = [])
 * @method Result describePartnerEventSource(array $args = [])
 * @method Promise describePartnerEventSourceAsync(array $args = [])
 * @method Result describeReplay(array $args = [])
 * @method Promise describeReplayAsync(array $args = [])
 * @method Result describeRule(array $args = [])
 * @method Promise describeRuleAsync(array $args = [])
 * @method Result disableRule(array $args = [])
 * @method Promise disableRuleAsync(array $args = [])
 * @method Result enableRule(array $args = [])
 * @method Promise enableRuleAsync(array $args = [])
 * @method Result listApiDestinations(array $args = [])
 * @method Promise listApiDestinationsAsync(array $args = [])
 * @method Result listArchives(array $args = [])
 * @method Promise listArchivesAsync(array $args = [])
 * @method Result listConnections(array $args = [])
 * @method Promise listConnectionsAsync(array $args = [])
 * @method Result listEndpoints(array $args = [])
 * @method Promise listEndpointsAsync(array $args = [])
 * @method Result listEventBuses(array $args = [])
 * @method Promise listEventBusesAsync(array $args = [])
 * @method Result listEventSources(array $args = [])
 * @method Promise listEventSourcesAsync(array $args = [])
 * @method Result listPartnerEventSourceAccounts(array $args = [])
 * @method Promise listPartnerEventSourceAccountsAsync(array $args = [])
 * @method Result listPartnerEventSources(array $args = [])
 * @method Promise listPartnerEventSourcesAsync(array $args = [])
 * @method Result listReplays(array $args = [])
 * @method Promise listReplaysAsync(array $args = [])
 * @method Result listRuleNamesByTarget(array $args = [])
 * @method Promise listRuleNamesByTargetAsync(array $args = [])
 * @method Result listRules(array $args = [])
 * @method Promise listRulesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTargetsByRule(array $args = [])
 * @method Promise listTargetsByRuleAsync(array $args = [])
 * @method Result putEvents(array $args = [])
 * @method Promise putEventsAsync(array $args = [])
 * @method Result putPartnerEvents(array $args = [])
 * @method Promise putPartnerEventsAsync(array $args = [])
 * @method Result putPermission(array $args = [])
 * @method Promise putPermissionAsync(array $args = [])
 * @method Result putRule(array $args = [])
 * @method Promise putRuleAsync(array $args = [])
 * @method Result putTargets(array $args = [])
 * @method Promise putTargetsAsync(array $args = [])
 * @method Result removePermission(array $args = [])
 * @method Promise removePermissionAsync(array $args = [])
 * @method Result removeTargets(array $args = [])
 * @method Promise removeTargetsAsync(array $args = [])
 * @method Result startReplay(array $args = [])
 * @method Promise startReplayAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result testEventPattern(array $args = [])
 * @method Promise testEventPatternAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateApiDestination(array $args = [])
 * @method Promise updateApiDestinationAsync(array $args = [])
 * @method Result updateArchive(array $args = [])
 * @method Promise updateArchiveAsync(array $args = [])
 * @method Result updateConnection(array $args = [])
 * @method Promise updateConnectionAsync(array $args = [])
 * @method Result updateEndpoint(array $args = [])
 * @method Promise updateEndpointAsync(array $args = [])
 */
class EventBridgeClient extends AwsClient {
    public function __construct(array $args)
    {
        parent::__construct($args);

        if ($this->isUseEndpointV2()) {
            $stack = $this->getHandlerList();
            $isCustomEndpoint = isset($args['endpoint']);
            $stack->appendBuild(
                EventBridgeEndpointMiddleware::wrap(
                    $this->getRegion(),
                    [
                        'use_fips_endpoint' =>
                            $this->getConfig('use_fips_endpoint')->isUseFipsEndpoint(),
                        'dual_stack' =>
                            $this->getConfig('use_dual_stack_endpoint')->isUseDualStackEndpoint(),
                    ],
                    $this->getConfig('endpoint_provider'),
                    $isCustomEndpoint
                ),
                'eventbridge.endpoint_middleware'
            );
        }
    }
}
