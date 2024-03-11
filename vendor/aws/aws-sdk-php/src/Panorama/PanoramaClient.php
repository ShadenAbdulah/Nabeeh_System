<?php
namespace Aws\Panorama;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Panorama** service.
 * @method Result createApplicationInstance(array $args = [])
 * @method Promise createApplicationInstanceAsync(array $args = [])
 * @method Result createJobForDevices(array $args = [])
 * @method Promise createJobForDevicesAsync(array $args = [])
 * @method Result createNodeFromTemplateJob(array $args = [])
 * @method Promise createNodeFromTemplateJobAsync(array $args = [])
 * @method Result createPackage(array $args = [])
 * @method Promise createPackageAsync(array $args = [])
 * @method Result createPackageImportJob(array $args = [])
 * @method Promise createPackageImportJobAsync(array $args = [])
 * @method Result deleteDevice(array $args = [])
 * @method Promise deleteDeviceAsync(array $args = [])
 * @method Result deletePackage(array $args = [])
 * @method Promise deletePackageAsync(array $args = [])
 * @method Result deregisterPackageVersion(array $args = [])
 * @method Promise deregisterPackageVersionAsync(array $args = [])
 * @method Result describeApplicationInstance(array $args = [])
 * @method Promise describeApplicationInstanceAsync(array $args = [])
 * @method Result describeApplicationInstanceDetails(array $args = [])
 * @method Promise describeApplicationInstanceDetailsAsync(array $args = [])
 * @method Result describeDevice(array $args = [])
 * @method Promise describeDeviceAsync(array $args = [])
 * @method Result describeDeviceJob(array $args = [])
 * @method Promise describeDeviceJobAsync(array $args = [])
 * @method Result describeNode(array $args = [])
 * @method Promise describeNodeAsync(array $args = [])
 * @method Result describeNodeFromTemplateJob(array $args = [])
 * @method Promise describeNodeFromTemplateJobAsync(array $args = [])
 * @method Result describePackage(array $args = [])
 * @method Promise describePackageAsync(array $args = [])
 * @method Result describePackageImportJob(array $args = [])
 * @method Promise describePackageImportJobAsync(array $args = [])
 * @method Result describePackageVersion(array $args = [])
 * @method Promise describePackageVersionAsync(array $args = [])
 * @method Result listApplicationInstanceDependencies(array $args = [])
 * @method Promise listApplicationInstanceDependenciesAsync(array $args = [])
 * @method Result listApplicationInstanceNodeInstances(array $args = [])
 * @method Promise listApplicationInstanceNodeInstancesAsync(array $args = [])
 * @method Result listApplicationInstances(array $args = [])
 * @method Promise listApplicationInstancesAsync(array $args = [])
 * @method Result listDevices(array $args = [])
 * @method Promise listDevicesAsync(array $args = [])
 * @method Result listDevicesJobs(array $args = [])
 * @method Promise listDevicesJobsAsync(array $args = [])
 * @method Result listNodeFromTemplateJobs(array $args = [])
 * @method Promise listNodeFromTemplateJobsAsync(array $args = [])
 * @method Result listNodes(array $args = [])
 * @method Promise listNodesAsync(array $args = [])
 * @method Result listPackageImportJobs(array $args = [])
 * @method Promise listPackageImportJobsAsync(array $args = [])
 * @method Result listPackages(array $args = [])
 * @method Promise listPackagesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result provisionDevice(array $args = [])
 * @method Promise provisionDeviceAsync(array $args = [])
 * @method Result registerPackageVersion(array $args = [])
 * @method Promise registerPackageVersionAsync(array $args = [])
 * @method Result removeApplicationInstance(array $args = [])
 * @method Promise removeApplicationInstanceAsync(array $args = [])
 * @method Result signalApplicationInstanceNodeInstances(array $args = [])
 * @method Promise signalApplicationInstanceNodeInstancesAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateDeviceMetadata(array $args = [])
 * @method Promise updateDeviceMetadataAsync(array $args = [])
 */
class PanoramaClient extends AwsClient {}
