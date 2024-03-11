<?php
namespace Aws\Route53RecoveryControlConfig;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Route53 Recovery Control Config** service.
 * @method Result createCluster(array $args = [])
 * @method Promise createClusterAsync(array $args = [])
 * @method Result createControlPanel(array $args = [])
 * @method Promise createControlPanelAsync(array $args = [])
 * @method Result createRoutingControl(array $args = [])
 * @method Promise createRoutingControlAsync(array $args = [])
 * @method Result createSafetyRule(array $args = [])
 * @method Promise createSafetyRuleAsync(array $args = [])
 * @method Result deleteCluster(array $args = [])
 * @method Promise deleteClusterAsync(array $args = [])
 * @method Result deleteControlPanel(array $args = [])
 * @method Promise deleteControlPanelAsync(array $args = [])
 * @method Result deleteRoutingControl(array $args = [])
 * @method Promise deleteRoutingControlAsync(array $args = [])
 * @method Result deleteSafetyRule(array $args = [])
 * @method Promise deleteSafetyRuleAsync(array $args = [])
 * @method Result describeCluster(array $args = [])
 * @method Promise describeClusterAsync(array $args = [])
 * @method Result describeControlPanel(array $args = [])
 * @method Promise describeControlPanelAsync(array $args = [])
 * @method Result describeRoutingControl(array $args = [])
 * @method Promise describeRoutingControlAsync(array $args = [])
 * @method Result describeSafetyRule(array $args = [])
 * @method Promise describeSafetyRuleAsync(array $args = [])
 * @method Result getResourcePolicy(array $args = [])
 * @method Promise getResourcePolicyAsync(array $args = [])
 * @method Result listAssociatedRoute53HealthChecks(array $args = [])
 * @method Promise listAssociatedRoute53HealthChecksAsync(array $args = [])
 * @method Result listClusters(array $args = [])
 * @method Promise listClustersAsync(array $args = [])
 * @method Result listControlPanels(array $args = [])
 * @method Promise listControlPanelsAsync(array $args = [])
 * @method Result listRoutingControls(array $args = [])
 * @method Promise listRoutingControlsAsync(array $args = [])
 * @method Result listSafetyRules(array $args = [])
 * @method Promise listSafetyRulesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateControlPanel(array $args = [])
 * @method Promise updateControlPanelAsync(array $args = [])
 * @method Result updateRoutingControl(array $args = [])
 * @method Promise updateRoutingControlAsync(array $args = [])
 * @method Result updateSafetyRule(array $args = [])
 * @method Promise updateSafetyRuleAsync(array $args = [])
 */
class Route53RecoveryControlConfigClient extends AwsClient {}
