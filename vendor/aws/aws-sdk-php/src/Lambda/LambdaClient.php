<?php
namespace Aws\Lambda;

use Aws\AwsClient;
use Aws\CommandInterface;
use Aws\Middleware;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with AWS Lambda
 *
 * @method Result addLayerVersionPermission(array $args = [])
 * @method Promise addLayerVersionPermissionAsync(array $args = [])
 * @method Result addPermission(array $args = [])
 * @method Promise addPermissionAsync(array $args = [])
 * @method Result createAlias(array $args = [])
 * @method Promise createAliasAsync(array $args = [])
 * @method Result createCodeSigningConfig(array $args = [])
 * @method Promise createCodeSigningConfigAsync(array $args = [])
 * @method Result createEventSourceMapping(array $args = [])
 * @method Promise createEventSourceMappingAsync(array $args = [])
 * @method Result createFunction(array $args = [])
 * @method Promise createFunctionAsync(array $args = [])
 * @method Result createFunctionUrlConfig(array $args = [])
 * @method Promise createFunctionUrlConfigAsync(array $args = [])
 * @method Result deleteAlias(array $args = [])
 * @method Promise deleteAliasAsync(array $args = [])
 * @method Result deleteCodeSigningConfig(array $args = [])
 * @method Promise deleteCodeSigningConfigAsync(array $args = [])
 * @method Result deleteEventSourceMapping(array $args = [])
 * @method Promise deleteEventSourceMappingAsync(array $args = [])
 * @method Result deleteFunction(array $args = [])
 * @method Promise deleteFunctionAsync(array $args = [])
 * @method Result deleteFunctionCodeSigningConfig(array $args = [])
 * @method Promise deleteFunctionCodeSigningConfigAsync(array $args = [])
 * @method Result deleteFunctionConcurrency(array $args = [])
 * @method Promise deleteFunctionConcurrencyAsync(array $args = [])
 * @method Result deleteFunctionEventInvokeConfig(array $args = [])
 * @method Promise deleteFunctionEventInvokeConfigAsync(array $args = [])
 * @method Result deleteFunctionUrlConfig(array $args = [])
 * @method Promise deleteFunctionUrlConfigAsync(array $args = [])
 * @method Result deleteLayerVersion(array $args = [])
 * @method Promise deleteLayerVersionAsync(array $args = [])
 * @method Result deleteProvisionedConcurrencyConfig(array $args = [])
 * @method Promise deleteProvisionedConcurrencyConfigAsync(array $args = [])
 * @method Result getAccountSettings(array $args = [])
 * @method Promise getAccountSettingsAsync(array $args = [])
 * @method Result getAlias(array $args = [])
 * @method Promise getAliasAsync(array $args = [])
 * @method Result getCodeSigningConfig(array $args = [])
 * @method Promise getCodeSigningConfigAsync(array $args = [])
 * @method Result getEventSourceMapping(array $args = [])
 * @method Promise getEventSourceMappingAsync(array $args = [])
 * @method Result getFunction(array $args = [])
 * @method Promise getFunctionAsync(array $args = [])
 * @method Result getFunctionCodeSigningConfig(array $args = [])
 * @method Promise getFunctionCodeSigningConfigAsync(array $args = [])
 * @method Result getFunctionConcurrency(array $args = [])
 * @method Promise getFunctionConcurrencyAsync(array $args = [])
 * @method Result getFunctionConfiguration(array $args = [])
 * @method Promise getFunctionConfigurationAsync(array $args = [])
 * @method Result getFunctionEventInvokeConfig(array $args = [])
 * @method Promise getFunctionEventInvokeConfigAsync(array $args = [])
 * @method Result getFunctionUrlConfig(array $args = [])
 * @method Promise getFunctionUrlConfigAsync(array $args = [])
 * @method Result getLayerVersion(array $args = [])
 * @method Promise getLayerVersionAsync(array $args = [])
 * @method Result getLayerVersionByArn(array $args = [])
 * @method Promise getLayerVersionByArnAsync(array $args = [])
 * @method Result getLayerVersionPolicy(array $args = [])
 * @method Promise getLayerVersionPolicyAsync(array $args = [])
 * @method Result getPolicy(array $args = [])
 * @method Promise getPolicyAsync(array $args = [])
 * @method Result getProvisionedConcurrencyConfig(array $args = [])
 * @method Promise getProvisionedConcurrencyConfigAsync(array $args = [])
 * @method Result getRuntimeManagementConfig(array $args = [])
 * @method Promise getRuntimeManagementConfigAsync(array $args = [])
 * @method Result invoke(array $args = [])
 * @method Promise invokeAsync(array $args = [])
 * @method Result invokeAsync(array $args = [])
 * @method Promise invokeAsyncAsync(array $args = [])
 * @method Result invokeWithResponseStream(array $args = [])
 * @method Promise invokeWithResponseStreamAsync(array $args = [])
 * @method Result listAliases(array $args = [])
 * @method Promise listAliasesAsync(array $args = [])
 * @method Result listCodeSigningConfigs(array $args = [])
 * @method Promise listCodeSigningConfigsAsync(array $args = [])
 * @method Result listEventSourceMappings(array $args = [])
 * @method Promise listEventSourceMappingsAsync(array $args = [])
 * @method Result listFunctionEventInvokeConfigs(array $args = [])
 * @method Promise listFunctionEventInvokeConfigsAsync(array $args = [])
 * @method Result listFunctionUrlConfigs(array $args = [])
 * @method Promise listFunctionUrlConfigsAsync(array $args = [])
 * @method Result listFunctions(array $args = [])
 * @method Promise listFunctionsAsync(array $args = [])
 * @method Result listFunctionsByCodeSigningConfig(array $args = [])
 * @method Promise listFunctionsByCodeSigningConfigAsync(array $args = [])
 * @method Result listLayerVersions(array $args = [])
 * @method Promise listLayerVersionsAsync(array $args = [])
 * @method Result listLayers(array $args = [])
 * @method Promise listLayersAsync(array $args = [])
 * @method Result listProvisionedConcurrencyConfigs(array $args = [])
 * @method Promise listProvisionedConcurrencyConfigsAsync(array $args = [])
 * @method Result listTags(array $args = [])
 * @method Promise listTagsAsync(array $args = [])
 * @method Result listVersionsByFunction(array $args = [])
 * @method Promise listVersionsByFunctionAsync(array $args = [])
 * @method Result publishLayerVersion(array $args = [])
 * @method Promise publishLayerVersionAsync(array $args = [])
 * @method Result publishVersion(array $args = [])
 * @method Promise publishVersionAsync(array $args = [])
 * @method Result putFunctionCodeSigningConfig(array $args = [])
 * @method Promise putFunctionCodeSigningConfigAsync(array $args = [])
 * @method Result putFunctionConcurrency(array $args = [])
 * @method Promise putFunctionConcurrencyAsync(array $args = [])
 * @method Result putFunctionEventInvokeConfig(array $args = [])
 * @method Promise putFunctionEventInvokeConfigAsync(array $args = [])
 * @method Result putProvisionedConcurrencyConfig(array $args = [])
 * @method Promise putProvisionedConcurrencyConfigAsync(array $args = [])
 * @method Result putRuntimeManagementConfig(array $args = [])
 * @method Promise putRuntimeManagementConfigAsync(array $args = [])
 * @method Result removeLayerVersionPermission(array $args = [])
 * @method Promise removeLayerVersionPermissionAsync(array $args = [])
 * @method Result removePermission(array $args = [])
 * @method Promise removePermissionAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAlias(array $args = [])
 * @method Promise updateAliasAsync(array $args = [])
 * @method Result updateCodeSigningConfig(array $args = [])
 * @method Promise updateCodeSigningConfigAsync(array $args = [])
 * @method Result updateEventSourceMapping(array $args = [])
 * @method Promise updateEventSourceMappingAsync(array $args = [])
 * @method Result updateFunctionCode(array $args = [])
 * @method Promise updateFunctionCodeAsync(array $args = [])
 * @method Result updateFunctionConfiguration(array $args = [])
 * @method Promise updateFunctionConfigurationAsync(array $args = [])
 * @method Result updateFunctionEventInvokeConfig(array $args = [])
 * @method Promise updateFunctionEventInvokeConfigAsync(array $args = [])
 * @method Result updateFunctionUrlConfig(array $args = [])
 * @method Promise updateFunctionUrlConfigAsync(array $args = [])
 */
class LambdaClient extends AwsClient
{
    /**
     * {@inheritdoc}
     */
    public function __construct(array $args)
    {
        parent::__construct($args);
        $list = $this->getHandlerList();
        if (extension_loaded('curl')) {
            $list->appendInit($this->getDefaultCurlOptionsMiddleware());
        }
    }

    /**
     * Provides a middleware that sets default Curl options for the command
     *
     * @return callable
     */
    public function getDefaultCurlOptionsMiddleware()
    {
        return Middleware::mapCommand(function (CommandInterface $cmd) {
            $defaultCurlOptions = [
                CURLOPT_TCP_KEEPALIVE => 1,
            ];
            if (!isset($cmd['@http']['curl'])) {
                $cmd['@http']['curl'] = $defaultCurlOptions;
            } else {
                $cmd['@http']['curl'] += $defaultCurlOptions;
            }
            return $cmd;
        });
    }
}
