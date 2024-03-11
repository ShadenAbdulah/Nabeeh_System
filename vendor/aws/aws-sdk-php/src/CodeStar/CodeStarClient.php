<?php
namespace Aws\CodeStar;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS CodeStar** service.
 * @method Result associateTeamMember(array $args = [])
 * @method Promise associateTeamMemberAsync(array $args = [])
 * @method Result createProject(array $args = [])
 * @method Promise createProjectAsync(array $args = [])
 * @method Result createUserProfile(array $args = [])
 * @method Promise createUserProfileAsync(array $args = [])
 * @method Result deleteProject(array $args = [])
 * @method Promise deleteProjectAsync(array $args = [])
 * @method Result deleteUserProfile(array $args = [])
 * @method Promise deleteUserProfileAsync(array $args = [])
 * @method Result describeProject(array $args = [])
 * @method Promise describeProjectAsync(array $args = [])
 * @method Result describeUserProfile(array $args = [])
 * @method Promise describeUserProfileAsync(array $args = [])
 * @method Result disassociateTeamMember(array $args = [])
 * @method Promise disassociateTeamMemberAsync(array $args = [])
 * @method Result listProjects(array $args = [])
 * @method Promise listProjectsAsync(array $args = [])
 * @method Result listResources(array $args = [])
 * @method Promise listResourcesAsync(array $args = [])
 * @method Result listTagsForProject(array $args = [])
 * @method Promise listTagsForProjectAsync(array $args = [])
 * @method Result listTeamMembers(array $args = [])
 * @method Promise listTeamMembersAsync(array $args = [])
 * @method Result listUserProfiles(array $args = [])
 * @method Promise listUserProfilesAsync(array $args = [])
 * @method Result tagProject(array $args = [])
 * @method Promise tagProjectAsync(array $args = [])
 * @method Result untagProject(array $args = [])
 * @method Promise untagProjectAsync(array $args = [])
 * @method Result updateProject(array $args = [])
 * @method Promise updateProjectAsync(array $args = [])
 * @method Result updateTeamMember(array $args = [])
 * @method Promise updateTeamMemberAsync(array $args = [])
 * @method Result updateUserProfile(array $args = [])
 * @method Promise updateUserProfileAsync(array $args = [])
 */
class CodeStarClient extends AwsClient {}
