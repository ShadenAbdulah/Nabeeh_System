<?php
namespace Aws\CodeGuruProfiler;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon CodeGuru Profiler** service.
 * @method Result addNotificationChannels(array $args = [])
 * @method Promise addNotificationChannelsAsync(array $args = [])
 * @method Result batchGetFrameMetricData(array $args = [])
 * @method Promise batchGetFrameMetricDataAsync(array $args = [])
 * @method Result configureAgent(array $args = [])
 * @method Promise configureAgentAsync(array $args = [])
 * @method Result createProfilingGroup(array $args = [])
 * @method Promise createProfilingGroupAsync(array $args = [])
 * @method Result deleteProfilingGroup(array $args = [])
 * @method Promise deleteProfilingGroupAsync(array $args = [])
 * @method Result describeProfilingGroup(array $args = [])
 * @method Promise describeProfilingGroupAsync(array $args = [])
 * @method Result getFindingsReportAccountSummary(array $args = [])
 * @method Promise getFindingsReportAccountSummaryAsync(array $args = [])
 * @method Result getNotificationConfiguration(array $args = [])
 * @method Promise getNotificationConfigurationAsync(array $args = [])
 * @method Result getPolicy(array $args = [])
 * @method Promise getPolicyAsync(array $args = [])
 * @method Result getProfile(array $args = [])
 * @method Promise getProfileAsync(array $args = [])
 * @method Result getRecommendations(array $args = [])
 * @method Promise getRecommendationsAsync(array $args = [])
 * @method Result listFindingsReports(array $args = [])
 * @method Promise listFindingsReportsAsync(array $args = [])
 * @method Result listProfileTimes(array $args = [])
 * @method Promise listProfileTimesAsync(array $args = [])
 * @method Result listProfilingGroups(array $args = [])
 * @method Promise listProfilingGroupsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result postAgentProfile(array $args = [])
 * @method Promise postAgentProfileAsync(array $args = [])
 * @method Result putPermission(array $args = [])
 * @method Promise putPermissionAsync(array $args = [])
 * @method Result removeNotificationChannel(array $args = [])
 * @method Promise removeNotificationChannelAsync(array $args = [])
 * @method Result removePermission(array $args = [])
 * @method Promise removePermissionAsync(array $args = [])
 * @method Result submitFeedback(array $args = [])
 * @method Promise submitFeedbackAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateProfilingGroup(array $args = [])
 * @method Promise updateProfilingGroupAsync(array $args = [])
 */
class CodeGuruProfilerClient extends AwsClient {}
