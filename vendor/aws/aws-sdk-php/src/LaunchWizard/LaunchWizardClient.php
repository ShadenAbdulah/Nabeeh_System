<?php
namespace Aws\LaunchWizard;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Launch Wizard** service.
 * @method Result createDeployment(array $args = [])
 * @method Promise createDeploymentAsync(array $args = [])
 * @method Result deleteDeployment(array $args = [])
 * @method Promise deleteDeploymentAsync(array $args = [])
 * @method Result getDeployment(array $args = [])
 * @method Promise getDeploymentAsync(array $args = [])
 * @method Result getWorkload(array $args = [])
 * @method Promise getWorkloadAsync(array $args = [])
 * @method Result listDeploymentEvents(array $args = [])
 * @method Promise listDeploymentEventsAsync(array $args = [])
 * @method Result listDeployments(array $args = [])
 * @method Promise listDeploymentsAsync(array $args = [])
 * @method Result listWorkloadDeploymentPatterns(array $args = [])
 * @method Promise listWorkloadDeploymentPatternsAsync(array $args = [])
 * @method Result listWorkloads(array $args = [])
 * @method Promise listWorkloadsAsync(array $args = [])
 */
class LaunchWizardClient extends AwsClient {}
