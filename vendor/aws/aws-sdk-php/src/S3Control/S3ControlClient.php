<?php
namespace Aws\S3Control;

use Aws\AwsClient;
use Aws\CacheInterface;
use Aws\HandlerList;
use Aws\Result;
use Aws\S3\UseArnRegion\Configuration;
use Aws\S3\UseArnRegion\ConfigurationInterface;
use Aws\S3\UseArnRegion\ConfigurationProvider as UseArnRegionConfigurationProvider;
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * This client is used to interact with the **AWS S3 Control** service.
 * @method Result associateAccessGrantsIdentityCenter(array $args = [])
 * @method Promise associateAccessGrantsIdentityCenterAsync(array $args = [])
 * @method Result createAccessGrant(array $args = [])
 * @method Promise createAccessGrantAsync(array $args = [])
 * @method Result createAccessGrantsInstance(array $args = [])
 * @method Promise createAccessGrantsInstanceAsync(array $args = [])
 * @method Result createAccessGrantsLocation(array $args = [])
 * @method Promise createAccessGrantsLocationAsync(array $args = [])
 * @method Result createAccessPoint(array $args = [])
 * @method Promise createAccessPointAsync(array $args = [])
 * @method Result createAccessPointForObjectLambda(array $args = [])
 * @method Promise createAccessPointForObjectLambdaAsync(array $args = [])
 * @method Result createBucket(array $args = [])
 * @method Promise createBucketAsync(array $args = [])
 * @method Result createJob(array $args = [])
 * @method Promise createJobAsync(array $args = [])
 * @method Result createMultiRegionAccessPoint(array $args = [])
 * @method Promise createMultiRegionAccessPointAsync(array $args = [])
 * @method Result createStorageLensGroup(array $args = [])
 * @method Promise createStorageLensGroupAsync(array $args = [])
 * @method Result deleteAccessGrant(array $args = [])
 * @method Promise deleteAccessGrantAsync(array $args = [])
 * @method Result deleteAccessGrantsInstance(array $args = [])
 * @method Promise deleteAccessGrantsInstanceAsync(array $args = [])
 * @method Result deleteAccessGrantsInstanceResourcePolicy(array $args = [])
 * @method Promise deleteAccessGrantsInstanceResourcePolicyAsync(array $args = [])
 * @method Result deleteAccessGrantsLocation(array $args = [])
 * @method Promise deleteAccessGrantsLocationAsync(array $args = [])
 * @method Result deleteAccessPoint(array $args = [])
 * @method Promise deleteAccessPointAsync(array $args = [])
 * @method Result deleteAccessPointForObjectLambda(array $args = [])
 * @method Promise deleteAccessPointForObjectLambdaAsync(array $args = [])
 * @method Result deleteAccessPointPolicy(array $args = [])
 * @method Promise deleteAccessPointPolicyAsync(array $args = [])
 * @method Result deleteAccessPointPolicyForObjectLambda(array $args = [])
 * @method Promise deleteAccessPointPolicyForObjectLambdaAsync(array $args = [])
 * @method Result deleteBucket(array $args = [])
 * @method Promise deleteBucketAsync(array $args = [])
 * @method Result deleteBucketLifecycleConfiguration(array $args = [])
 * @method Promise deleteBucketLifecycleConfigurationAsync(array $args = [])
 * @method Result deleteBucketPolicy(array $args = [])
 * @method Promise deleteBucketPolicyAsync(array $args = [])
 * @method Result deleteBucketReplication(array $args = [])
 * @method Promise deleteBucketReplicationAsync(array $args = [])
 * @method Result deleteBucketTagging(array $args = [])
 * @method Promise deleteBucketTaggingAsync(array $args = [])
 * @method Result deleteJobTagging(array $args = [])
 * @method Promise deleteJobTaggingAsync(array $args = [])
 * @method Result deleteMultiRegionAccessPoint(array $args = [])
 * @method Promise deleteMultiRegionAccessPointAsync(array $args = [])
 * @method Result deletePublicAccessBlock(array $args = [])
 * @method Promise deletePublicAccessBlockAsync(array $args = [])
 * @method Result deleteStorageLensConfiguration(array $args = [])
 * @method Promise deleteStorageLensConfigurationAsync(array $args = [])
 * @method Result deleteStorageLensConfigurationTagging(array $args = [])
 * @method Promise deleteStorageLensConfigurationTaggingAsync(array $args = [])
 * @method Result deleteStorageLensGroup(array $args = [])
 * @method Promise deleteStorageLensGroupAsync(array $args = [])
 * @method Result describeJob(array $args = [])
 * @method Promise describeJobAsync(array $args = [])
 * @method Result describeMultiRegionAccessPointOperation(array $args = [])
 * @method Promise describeMultiRegionAccessPointOperationAsync(array $args = [])
 * @method Result dissociateAccessGrantsIdentityCenter(array $args = [])
 * @method Promise dissociateAccessGrantsIdentityCenterAsync(array $args = [])
 * @method Result getAccessGrant(array $args = [])
 * @method Promise getAccessGrantAsync(array $args = [])
 * @method Result getAccessGrantsInstance(array $args = [])
 * @method Promise getAccessGrantsInstanceAsync(array $args = [])
 * @method Result getAccessGrantsInstanceForPrefix(array $args = [])
 * @method Promise getAccessGrantsInstanceForPrefixAsync(array $args = [])
 * @method Result getAccessGrantsInstanceResourcePolicy(array $args = [])
 * @method Promise getAccessGrantsInstanceResourcePolicyAsync(array $args = [])
 * @method Result getAccessGrantsLocation(array $args = [])
 * @method Promise getAccessGrantsLocationAsync(array $args = [])
 * @method Result getAccessPoint(array $args = [])
 * @method Promise getAccessPointAsync(array $args = [])
 * @method Result getAccessPointConfigurationForObjectLambda(array $args = [])
 * @method Promise getAccessPointConfigurationForObjectLambdaAsync(array $args = [])
 * @method Result getAccessPointForObjectLambda(array $args = [])
 * @method Promise getAccessPointForObjectLambdaAsync(array $args = [])
 * @method Result getAccessPointPolicy(array $args = [])
 * @method Promise getAccessPointPolicyAsync(array $args = [])
 * @method Result getAccessPointPolicyForObjectLambda(array $args = [])
 * @method Promise getAccessPointPolicyForObjectLambdaAsync(array $args = [])
 * @method Result getAccessPointPolicyStatus(array $args = [])
 * @method Promise getAccessPointPolicyStatusAsync(array $args = [])
 * @method Result getAccessPointPolicyStatusForObjectLambda(array $args = [])
 * @method Promise getAccessPointPolicyStatusForObjectLambdaAsync(array $args = [])
 * @method Result getBucket(array $args = [])
 * @method Promise getBucketAsync(array $args = [])
 * @method Result getBucketLifecycleConfiguration(array $args = [])
 * @method Promise getBucketLifecycleConfigurationAsync(array $args = [])
 * @method Result getBucketPolicy(array $args = [])
 * @method Promise getBucketPolicyAsync(array $args = [])
 * @method Result getBucketReplication(array $args = [])
 * @method Promise getBucketReplicationAsync(array $args = [])
 * @method Result getBucketTagging(array $args = [])
 * @method Promise getBucketTaggingAsync(array $args = [])
 * @method Result getBucketVersioning(array $args = [])
 * @method Promise getBucketVersioningAsync(array $args = [])
 * @method Result getDataAccess(array $args = [])
 * @method Promise getDataAccessAsync(array $args = [])
 * @method Result getJobTagging(array $args = [])
 * @method Promise getJobTaggingAsync(array $args = [])
 * @method Result getMultiRegionAccessPoint(array $args = [])
 * @method Promise getMultiRegionAccessPointAsync(array $args = [])
 * @method Result getMultiRegionAccessPointPolicy(array $args = [])
 * @method Promise getMultiRegionAccessPointPolicyAsync(array $args = [])
 * @method Result getMultiRegionAccessPointPolicyStatus(array $args = [])
 * @method Promise getMultiRegionAccessPointPolicyStatusAsync(array $args = [])
 * @method Result getMultiRegionAccessPointRoutes(array $args = [])
 * @method Promise getMultiRegionAccessPointRoutesAsync(array $args = [])
 * @method Result getPublicAccessBlock(array $args = [])
 * @method Promise getPublicAccessBlockAsync(array $args = [])
 * @method Result getStorageLensConfiguration(array $args = [])
 * @method Promise getStorageLensConfigurationAsync(array $args = [])
 * @method Result getStorageLensConfigurationTagging(array $args = [])
 * @method Promise getStorageLensConfigurationTaggingAsync(array $args = [])
 * @method Result getStorageLensGroup(array $args = [])
 * @method Promise getStorageLensGroupAsync(array $args = [])
 * @method Result listAccessGrants(array $args = [])
 * @method Promise listAccessGrantsAsync(array $args = [])
 * @method Result listAccessGrantsInstances(array $args = [])
 * @method Promise listAccessGrantsInstancesAsync(array $args = [])
 * @method Result listAccessGrantsLocations(array $args = [])
 * @method Promise listAccessGrantsLocationsAsync(array $args = [])
 * @method Result listAccessPoints(array $args = [])
 * @method Promise listAccessPointsAsync(array $args = [])
 * @method Result listAccessPointsForObjectLambda(array $args = [])
 * @method Promise listAccessPointsForObjectLambdaAsync(array $args = [])
 * @method Result listJobs(array $args = [])
 * @method Promise listJobsAsync(array $args = [])
 * @method Result listMultiRegionAccessPoints(array $args = [])
 * @method Promise listMultiRegionAccessPointsAsync(array $args = [])
 * @method Result listRegionalBuckets(array $args = [])
 * @method Promise listRegionalBucketsAsync(array $args = [])
 * @method Result listStorageLensConfigurations(array $args = [])
 * @method Promise listStorageLensConfigurationsAsync(array $args = [])
 * @method Result listStorageLensGroups(array $args = [])
 * @method Promise listStorageLensGroupsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putAccessGrantsInstanceResourcePolicy(array $args = [])
 * @method Promise putAccessGrantsInstanceResourcePolicyAsync(array $args = [])
 * @method Result putAccessPointConfigurationForObjectLambda(array $args = [])
 * @method Promise putAccessPointConfigurationForObjectLambdaAsync(array $args = [])
 * @method Result putAccessPointPolicy(array $args = [])
 * @method Promise putAccessPointPolicyAsync(array $args = [])
 * @method Result putAccessPointPolicyForObjectLambda(array $args = [])
 * @method Promise putAccessPointPolicyForObjectLambdaAsync(array $args = [])
 * @method Result putBucketLifecycleConfiguration(array $args = [])
 * @method Promise putBucketLifecycleConfigurationAsync(array $args = [])
 * @method Result putBucketPolicy(array $args = [])
 * @method Promise putBucketPolicyAsync(array $args = [])
 * @method Result putBucketReplication(array $args = [])
 * @method Promise putBucketReplicationAsync(array $args = [])
 * @method Result putBucketTagging(array $args = [])
 * @method Promise putBucketTaggingAsync(array $args = [])
 * @method Result putBucketVersioning(array $args = [])
 * @method Promise putBucketVersioningAsync(array $args = [])
 * @method Result putJobTagging(array $args = [])
 * @method Promise putJobTaggingAsync(array $args = [])
 * @method Result putMultiRegionAccessPointPolicy(array $args = [])
 * @method Promise putMultiRegionAccessPointPolicyAsync(array $args = [])
 * @method Result putPublicAccessBlock(array $args = [])
 * @method Promise putPublicAccessBlockAsync(array $args = [])
 * @method Result putStorageLensConfiguration(array $args = [])
 * @method Promise putStorageLensConfigurationAsync(array $args = [])
 * @method Result putStorageLensConfigurationTagging(array $args = [])
 * @method Promise putStorageLensConfigurationTaggingAsync(array $args = [])
 * @method Result submitMultiRegionAccessPointRoutes(array $args = [])
 * @method Promise submitMultiRegionAccessPointRoutesAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAccessGrantsLocation(array $args = [])
 * @method Promise updateAccessGrantsLocationAsync(array $args = [])
 * @method Result updateJobPriority(array $args = [])
 * @method Promise updateJobPriorityAsync(array $args = [])
 * @method Result updateJobStatus(array $args = [])
 * @method Promise updateJobStatusAsync(array $args = [])
 * @method Result updateStorageLensGroup(array $args = [])
 * @method Promise updateStorageLensGroupAsync(array $args = [])
 */
class S3ControlClient extends AwsClient
{
    public static function getArguments()
    {
        $args = parent::getArguments();
        return $args + [
            'use_dual_stack_endpoint' => [
                'type' => 'config',
                'valid' => ['bool'],
                'doc' => 'Set to true to send requests to an S3 Control Dual Stack'
                    . ' endpoint by default, which enables IPv6 Protocol.'
                    . ' Can be enabled or disabled on individual operations by setting'
                    . ' \'@use_dual_stack_endpoint\' to true or false.',
                'default' => false,
            ],
            'use_arn_region' => [
                'type'    => 'config',
                'valid'   => [
                    'bool',
                    Configuration::class,
                    CacheInterface::class,
                    'callable'
                ],
                'doc'     => 'Set to true to allow passed in ARNs to override'
                    . ' client region. Accepts...',
                'fn' => [__CLASS__, '_apply_use_arn_region'],
                'default' => [UseArnRegionConfigurationProvider::class, 'defaultProvider'],
            ],
        ];
    }

    public static function _apply_use_arn_region($value, array &$args, HandlerList $list)
    {
        if ($value instanceof CacheInterface) {
            $value = UseArnRegionConfigurationProvider::defaultProvider($args);
        }
        if (is_callable($value)) {
            $value = $value();
        }
        if ($value instanceof PromiseInterface) {
            $value = $value->wait();
        }
        if ($value instanceof ConfigurationInterface) {
            $args['use_arn_region'] = $value;
        } else {
            // The Configuration class itself will validate other inputs
            $args['use_arn_region'] = new Configuration($value);
        }
    }

    /**
     * {@inheritdoc}
     *
     * In addition to the options available to
     * {@see Aws\AwsClient::__construct}, S3ControlClient accepts the following
     * option:
     *
     * - use_dual_stack_endpoint: (bool) Set to true to send requests to an S3
     *   Control Dual Stack endpoint by default, which enables IPv6 Protocol.
     *   Can be enabled or disabled on individual operations by setting
     *   '@use_dual_stack_endpoint\' to true or false. Note:
     *   you cannot use it together with an accelerate endpoint.
     *
     * @param array $args
     */
    public function __construct(array $args)
    {
        parent::__construct($args);

        if ($this->isUseEndpointV2()) {
            $this->processEndpointV2Model();
        }
        $stack = $this->getHandlerList();
        $stack->appendBuild(
            EndpointArnMiddleware::wrap(
                $this->getApi(),
                $this->getRegion(),
                [
                    'use_arn_region' => $this->getConfig('use_arn_region'),
                    'dual_stack' =>
                        $this->getConfig('use_dual_stack_endpoint')->isUseDualStackEndpoint(),
                    'endpoint' => isset($args['endpoint'])
                        ? $args['endpoint']
                        : null,
                    'use_fips_endpoint' => $this->getConfig('use_fips_endpoint'),
                ],
                $this->isUseEndpointV2()
            ),
            's3control.endpoint_arn_middleware'
        );
    }

    /**
     * Modifies API definition to remove `AccountId`
     * host prefix.  This is now handled by the endpoint ruleset.
     *
     * @return void
     *
     * @internal
     */
    private function processEndpointV2Model()
    {
        $definition = $this->getApi()->getDefinition();
        $this->removeHostPrefix($definition);
        $this->removeRequiredMember($definition);
        $this->getApi()->setDefinition($definition);
    }

    private function removeHostPrefix(&$definition)
    {
        foreach($definition['operations'] as &$operation) {
            if (isset($operation['endpoint']['hostPrefix'])
                && $operation['endpoint']['hostPrefix'] === '{AccountId}.'
            ) {
                $operation['endpoint']['hostPrefix'] = str_replace(
                    '{AccountId}.',
                    '',
                    $operation['endpoint']['hostPrefix']
                );
            }
        }
    }

    private function removeRequiredMember(&$definition)
    {
        foreach($definition['shapes'] as &$shape) {
            if (isset($shape['required'])
            ) {
                $found = array_search('AccountId', $shape['required']);

                if ($found !== false) {
                    unset($shape['required'][$found]);
                }
            }
        }
    }
}
