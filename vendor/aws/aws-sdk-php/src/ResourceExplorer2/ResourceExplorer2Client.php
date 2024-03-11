<?php
namespace Aws\ResourceExplorer2;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Resource Explorer** service.
 * @method Result associateDefaultView(array $args = [])
 * @method Promise associateDefaultViewAsync(array $args = [])
 * @method Result batchGetView(array $args = [])
 * @method Promise batchGetViewAsync(array $args = [])
 * @method Result createIndex(array $args = [])
 * @method Promise createIndexAsync(array $args = [])
 * @method Result createView(array $args = [])
 * @method Promise createViewAsync(array $args = [])
 * @method Result deleteIndex(array $args = [])
 * @method Promise deleteIndexAsync(array $args = [])
 * @method Result deleteView(array $args = [])
 * @method Promise deleteViewAsync(array $args = [])
 * @method Result disassociateDefaultView(array $args = [])
 * @method Promise disassociateDefaultViewAsync(array $args = [])
 * @method Result getAccountLevelServiceConfiguration(array $args = [])
 * @method Promise getAccountLevelServiceConfigurationAsync(array $args = [])
 * @method Result getDefaultView(array $args = [])
 * @method Promise getDefaultViewAsync(array $args = [])
 * @method Result getIndex(array $args = [])
 * @method Promise getIndexAsync(array $args = [])
 * @method Result getView(array $args = [])
 * @method Promise getViewAsync(array $args = [])
 * @method Result listIndexes(array $args = [])
 * @method Promise listIndexesAsync(array $args = [])
 * @method Result listIndexesForMembers(array $args = [])
 * @method Promise listIndexesForMembersAsync(array $args = [])
 * @method Result listSupportedResourceTypes(array $args = [])
 * @method Promise listSupportedResourceTypesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listViews(array $args = [])
 * @method Promise listViewsAsync(array $args = [])
 * @method Result search(array $args = [])
 * @method Promise searchAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateIndexType(array $args = [])
 * @method Promise updateIndexTypeAsync(array $args = [])
 * @method Result updateView(array $args = [])
 * @method Promise updateViewAsync(array $args = [])
 */
class ResourceExplorer2Client extends AwsClient {}
