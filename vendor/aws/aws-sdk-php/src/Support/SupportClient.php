<?php
namespace Aws\Support;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * AWS Support client.
 *
 * @method Result addAttachmentsToSet(array $args = [])
 * @method Promise addAttachmentsToSetAsync(array $args = [])
 * @method Result addCommunicationToCase(array $args = [])
 * @method Promise addCommunicationToCaseAsync(array $args = [])
 * @method Result createCase(array $args = [])
 * @method Promise createCaseAsync(array $args = [])
 * @method Result describeAttachment(array $args = [])
 * @method Promise describeAttachmentAsync(array $args = [])
 * @method Result describeCases(array $args = [])
 * @method Promise describeCasesAsync(array $args = [])
 * @method Result describeCommunications(array $args = [])
 * @method Promise describeCommunicationsAsync(array $args = [])
 * @method Result describeCreateCaseOptions(array $args = [])
 * @method Promise describeCreateCaseOptionsAsync(array $args = [])
 * @method Result describeServices(array $args = [])
 * @method Promise describeServicesAsync(array $args = [])
 * @method Result describeSeverityLevels(array $args = [])
 * @method Promise describeSeverityLevelsAsync(array $args = [])
 * @method Result describeSupportedLanguages(array $args = [])
 * @method Promise describeSupportedLanguagesAsync(array $args = [])
 * @method Result describeTrustedAdvisorCheckRefreshStatuses(array $args = [])
 * @method Promise describeTrustedAdvisorCheckRefreshStatusesAsync(array $args = [])
 * @method Result describeTrustedAdvisorCheckResult(array $args = [])
 * @method Promise describeTrustedAdvisorCheckResultAsync(array $args = [])
 * @method Result describeTrustedAdvisorCheckSummaries(array $args = [])
 * @method Promise describeTrustedAdvisorCheckSummariesAsync(array $args = [])
 * @method Result describeTrustedAdvisorChecks(array $args = [])
 * @method Promise describeTrustedAdvisorChecksAsync(array $args = [])
 * @method Result refreshTrustedAdvisorCheck(array $args = [])
 * @method Promise refreshTrustedAdvisorCheckAsync(array $args = [])
 * @method Result resolveCase(array $args = [])
 * @method Promise resolveCaseAsync(array $args = [])
 */
class SupportClient extends AwsClient {}
