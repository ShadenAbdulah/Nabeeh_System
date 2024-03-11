<?php
namespace Aws\Mobile;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Mobile** service.
 * @method Result createProject(array $args = [])
 * @method Promise createProjectAsync(array $args = [])
 * @method Result deleteProject(array $args = [])
 * @method Promise deleteProjectAsync(array $args = [])
 * @method Result describeBundle(array $args = [])
 * @method Promise describeBundleAsync(array $args = [])
 * @method Result describeProject(array $args = [])
 * @method Promise describeProjectAsync(array $args = [])
 * @method Result exportBundle(array $args = [])
 * @method Promise exportBundleAsync(array $args = [])
 * @method Result exportProject(array $args = [])
 * @method Promise exportProjectAsync(array $args = [])
 * @method Result listBundles(array $args = [])
 * @method Promise listBundlesAsync(array $args = [])
 * @method Result listProjects(array $args = [])
 * @method Promise listProjectsAsync(array $args = [])
 * @method Result updateProject(array $args = [])
 * @method Promise updateProjectAsync(array $args = [])
 */
class MobileClient extends AwsClient {}
