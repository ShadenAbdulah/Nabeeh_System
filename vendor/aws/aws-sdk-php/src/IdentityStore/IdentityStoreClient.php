<?php
namespace Aws\IdentityStore;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS SSO Identity Store** service.
 * @method Result createGroup(array $args = [])
 * @method Promise createGroupAsync(array $args = [])
 * @method Result createGroupMembership(array $args = [])
 * @method Promise createGroupMembershipAsync(array $args = [])
 * @method Result createUser(array $args = [])
 * @method Promise createUserAsync(array $args = [])
 * @method Result deleteGroup(array $args = [])
 * @method Promise deleteGroupAsync(array $args = [])
 * @method Result deleteGroupMembership(array $args = [])
 * @method Promise deleteGroupMembershipAsync(array $args = [])
 * @method Result deleteUser(array $args = [])
 * @method Promise deleteUserAsync(array $args = [])
 * @method Result describeGroup(array $args = [])
 * @method Promise describeGroupAsync(array $args = [])
 * @method Result describeGroupMembership(array $args = [])
 * @method Promise describeGroupMembershipAsync(array $args = [])
 * @method Result describeUser(array $args = [])
 * @method Promise describeUserAsync(array $args = [])
 * @method Result getGroupId(array $args = [])
 * @method Promise getGroupIdAsync(array $args = [])
 * @method Result getGroupMembershipId(array $args = [])
 * @method Promise getGroupMembershipIdAsync(array $args = [])
 * @method Result getUserId(array $args = [])
 * @method Promise getUserIdAsync(array $args = [])
 * @method Result isMemberInGroups(array $args = [])
 * @method Promise isMemberInGroupsAsync(array $args = [])
 * @method Result listGroupMemberships(array $args = [])
 * @method Promise listGroupMembershipsAsync(array $args = [])
 * @method Result listGroupMembershipsForMember(array $args = [])
 * @method Promise listGroupMembershipsForMemberAsync(array $args = [])
 * @method Result listGroups(array $args = [])
 * @method Promise listGroupsAsync(array $args = [])
 * @method Result listUsers(array $args = [])
 * @method Promise listUsersAsync(array $args = [])
 * @method Result updateGroup(array $args = [])
 * @method Promise updateGroupAsync(array $args = [])
 * @method Result updateUser(array $args = [])
 * @method Promise updateUserAsync(array $args = [])
 */
class IdentityStoreClient extends AwsClient {}
