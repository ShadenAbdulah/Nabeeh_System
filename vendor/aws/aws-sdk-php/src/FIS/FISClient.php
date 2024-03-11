<?php
namespace Aws\FIS;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Fault Injection Simulator** service.
 * @method Result createExperimentTemplate(array $args = [])
 * @method Promise createExperimentTemplateAsync(array $args = [])
 * @method Result createTargetAccountConfiguration(array $args = [])
 * @method Promise createTargetAccountConfigurationAsync(array $args = [])
 * @method Result deleteExperimentTemplate(array $args = [])
 * @method Promise deleteExperimentTemplateAsync(array $args = [])
 * @method Result deleteTargetAccountConfiguration(array $args = [])
 * @method Promise deleteTargetAccountConfigurationAsync(array $args = [])
 * @method Result getAction(array $args = [])
 * @method Promise getActionAsync(array $args = [])
 * @method Result getExperiment(array $args = [])
 * @method Promise getExperimentAsync(array $args = [])
 * @method Result getExperimentTargetAccountConfiguration(array $args = [])
 * @method Promise getExperimentTargetAccountConfigurationAsync(array $args = [])
 * @method Result getExperimentTemplate(array $args = [])
 * @method Promise getExperimentTemplateAsync(array $args = [])
 * @method Result getTargetAccountConfiguration(array $args = [])
 * @method Promise getTargetAccountConfigurationAsync(array $args = [])
 * @method Result getTargetResourceType(array $args = [])
 * @method Promise getTargetResourceTypeAsync(array $args = [])
 * @method Result listActions(array $args = [])
 * @method Promise listActionsAsync(array $args = [])
 * @method Result listExperimentResolvedTargets(array $args = [])
 * @method Promise listExperimentResolvedTargetsAsync(array $args = [])
 * @method Result listExperimentTargetAccountConfigurations(array $args = [])
 * @method Promise listExperimentTargetAccountConfigurationsAsync(array $args = [])
 * @method Result listExperimentTemplates(array $args = [])
 * @method Promise listExperimentTemplatesAsync(array $args = [])
 * @method Result listExperiments(array $args = [])
 * @method Promise listExperimentsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTargetAccountConfigurations(array $args = [])
 * @method Promise listTargetAccountConfigurationsAsync(array $args = [])
 * @method Result listTargetResourceTypes(array $args = [])
 * @method Promise listTargetResourceTypesAsync(array $args = [])
 * @method Result startExperiment(array $args = [])
 * @method Promise startExperimentAsync(array $args = [])
 * @method Result stopExperiment(array $args = [])
 * @method Promise stopExperimentAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateExperimentTemplate(array $args = [])
 * @method Promise updateExperimentTemplateAsync(array $args = [])
 * @method Result updateTargetAccountConfiguration(array $args = [])
 * @method Promise updateTargetAccountConfigurationAsync(array $args = [])
 */
class FISClient extends AwsClient {}
