<?php
namespace Aws\Ses;

use Aws\Api\ApiProvider;
use Aws\Api\DocModel;
use Aws\Api\Service;
use Aws\AwsClient;
use Aws\Credentials\CredentialsInterface;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Simple Email Service (Amazon SES)**.
 *
 * @method Result cloneReceiptRuleSet(array $args = [])
 * @method Promise cloneReceiptRuleSetAsync(array $args = [])
 * @method Result createConfigurationSet(array $args = [])
 * @method Promise createConfigurationSetAsync(array $args = [])
 * @method Result createConfigurationSetEventDestination(array $args = [])
 * @method Promise createConfigurationSetEventDestinationAsync(array $args = [])
 * @method Result createConfigurationSetTrackingOptions(array $args = [])
 * @method Promise createConfigurationSetTrackingOptionsAsync(array $args = [])
 * @method Result createCustomVerificationEmailTemplate(array $args = [])
 * @method Promise createCustomVerificationEmailTemplateAsync(array $args = [])
 * @method Result createReceiptFilter(array $args = [])
 * @method Promise createReceiptFilterAsync(array $args = [])
 * @method Result createReceiptRule(array $args = [])
 * @method Promise createReceiptRuleAsync(array $args = [])
 * @method Result createReceiptRuleSet(array $args = [])
 * @method Promise createReceiptRuleSetAsync(array $args = [])
 * @method Result createTemplate(array $args = [])
 * @method Promise createTemplateAsync(array $args = [])
 * @method Result deleteConfigurationSet(array $args = [])
 * @method Promise deleteConfigurationSetAsync(array $args = [])
 * @method Result deleteConfigurationSetEventDestination(array $args = [])
 * @method Promise deleteConfigurationSetEventDestinationAsync(array $args = [])
 * @method Result deleteConfigurationSetTrackingOptions(array $args = [])
 * @method Promise deleteConfigurationSetTrackingOptionsAsync(array $args = [])
 * @method Result deleteCustomVerificationEmailTemplate(array $args = [])
 * @method Promise deleteCustomVerificationEmailTemplateAsync(array $args = [])
 * @method Result deleteIdentity(array $args = [])
 * @method Promise deleteIdentityAsync(array $args = [])
 * @method Result deleteIdentityPolicy(array $args = [])
 * @method Promise deleteIdentityPolicyAsync(array $args = [])
 * @method Result deleteReceiptFilter(array $args = [])
 * @method Promise deleteReceiptFilterAsync(array $args = [])
 * @method Result deleteReceiptRule(array $args = [])
 * @method Promise deleteReceiptRuleAsync(array $args = [])
 * @method Result deleteReceiptRuleSet(array $args = [])
 * @method Promise deleteReceiptRuleSetAsync(array $args = [])
 * @method Result deleteTemplate(array $args = [])
 * @method Promise deleteTemplateAsync(array $args = [])
 * @method Result deleteVerifiedEmailAddress(array $args = [])
 * @method Promise deleteVerifiedEmailAddressAsync(array $args = [])
 * @method Result describeActiveReceiptRuleSet(array $args = [])
 * @method Promise describeActiveReceiptRuleSetAsync(array $args = [])
 * @method Result describeConfigurationSet(array $args = [])
 * @method Promise describeConfigurationSetAsync(array $args = [])
 * @method Result describeReceiptRule(array $args = [])
 * @method Promise describeReceiptRuleAsync(array $args = [])
 * @method Result describeReceiptRuleSet(array $args = [])
 * @method Promise describeReceiptRuleSetAsync(array $args = [])
 * @method Result getAccountSendingEnabled(array $args = [])
 * @method Promise getAccountSendingEnabledAsync(array $args = [])
 * @method Result getCustomVerificationEmailTemplate(array $args = [])
 * @method Promise getCustomVerificationEmailTemplateAsync(array $args = [])
 * @method Result getIdentityDkimAttributes(array $args = [])
 * @method Promise getIdentityDkimAttributesAsync(array $args = [])
 * @method Result getIdentityMailFromDomainAttributes(array $args = [])
 * @method Promise getIdentityMailFromDomainAttributesAsync(array $args = [])
 * @method Result getIdentityNotificationAttributes(array $args = [])
 * @method Promise getIdentityNotificationAttributesAsync(array $args = [])
 * @method Result getIdentityPolicies(array $args = [])
 * @method Promise getIdentityPoliciesAsync(array $args = [])
 * @method Result getIdentityVerificationAttributes(array $args = [])
 * @method Promise getIdentityVerificationAttributesAsync(array $args = [])
 * @method Result getSendQuota(array $args = [])
 * @method Promise getSendQuotaAsync(array $args = [])
 * @method Result getSendStatistics(array $args = [])
 * @method Promise getSendStatisticsAsync(array $args = [])
 * @method Result getTemplate(array $args = [])
 * @method Promise getTemplateAsync(array $args = [])
 * @method Result listConfigurationSets(array $args = [])
 * @method Promise listConfigurationSetsAsync(array $args = [])
 * @method Result listCustomVerificationEmailTemplates(array $args = [])
 * @method Promise listCustomVerificationEmailTemplatesAsync(array $args = [])
 * @method Result listIdentities(array $args = [])
 * @method Promise listIdentitiesAsync(array $args = [])
 * @method Result listIdentityPolicies(array $args = [])
 * @method Promise listIdentityPoliciesAsync(array $args = [])
 * @method Result listReceiptFilters(array $args = [])
 * @method Promise listReceiptFiltersAsync(array $args = [])
 * @method Result listReceiptRuleSets(array $args = [])
 * @method Promise listReceiptRuleSetsAsync(array $args = [])
 * @method Result listTemplates(array $args = [])
 * @method Promise listTemplatesAsync(array $args = [])
 * @method Result listVerifiedEmailAddresses(array $args = [])
 * @method Promise listVerifiedEmailAddressesAsync(array $args = [])
 * @method Result putConfigurationSetDeliveryOptions(array $args = [])
 * @method Promise putConfigurationSetDeliveryOptionsAsync(array $args = [])
 * @method Result putIdentityPolicy(array $args = [])
 * @method Promise putIdentityPolicyAsync(array $args = [])
 * @method Result reorderReceiptRuleSet(array $args = [])
 * @method Promise reorderReceiptRuleSetAsync(array $args = [])
 * @method Result sendBounce(array $args = [])
 * @method Promise sendBounceAsync(array $args = [])
 * @method Result sendBulkTemplatedEmail(array $args = [])
 * @method Promise sendBulkTemplatedEmailAsync(array $args = [])
 * @method Result sendCustomVerificationEmail(array $args = [])
 * @method Promise sendCustomVerificationEmailAsync(array $args = [])
 * @method Result sendEmail(array $args = [])
 * @method Promise sendEmailAsync(array $args = [])
 * @method Result sendRawEmail(array $args = [])
 * @method Promise sendRawEmailAsync(array $args = [])
 * @method Result sendTemplatedEmail(array $args = [])
 * @method Promise sendTemplatedEmailAsync(array $args = [])
 * @method Result setActiveReceiptRuleSet(array $args = [])
 * @method Promise setActiveReceiptRuleSetAsync(array $args = [])
 * @method Result setIdentityDkimEnabled(array $args = [])
 * @method Promise setIdentityDkimEnabledAsync(array $args = [])
 * @method Result setIdentityFeedbackForwardingEnabled(array $args = [])
 * @method Promise setIdentityFeedbackForwardingEnabledAsync(array $args = [])
 * @method Result setIdentityHeadersInNotificationsEnabled(array $args = [])
 * @method Promise setIdentityHeadersInNotificationsEnabledAsync(array $args = [])
 * @method Result setIdentityMailFromDomain(array $args = [])
 * @method Promise setIdentityMailFromDomainAsync(array $args = [])
 * @method Result setIdentityNotificationTopic(array $args = [])
 * @method Promise setIdentityNotificationTopicAsync(array $args = [])
 * @method Result setReceiptRulePosition(array $args = [])
 * @method Promise setReceiptRulePositionAsync(array $args = [])
 * @method Result testRenderTemplate(array $args = [])
 * @method Promise testRenderTemplateAsync(array $args = [])
 * @method Result updateAccountSendingEnabled(array $args = [])
 * @method Promise updateAccountSendingEnabledAsync(array $args = [])
 * @method Result updateConfigurationSetEventDestination(array $args = [])
 * @method Promise updateConfigurationSetEventDestinationAsync(array $args = [])
 * @method Result updateConfigurationSetReputationMetricsEnabled(array $args = [])
 * @method Promise updateConfigurationSetReputationMetricsEnabledAsync(array $args = [])
 * @method Result updateConfigurationSetSendingEnabled(array $args = [])
 * @method Promise updateConfigurationSetSendingEnabledAsync(array $args = [])
 * @method Result updateConfigurationSetTrackingOptions(array $args = [])
 * @method Promise updateConfigurationSetTrackingOptionsAsync(array $args = [])
 * @method Result updateCustomVerificationEmailTemplate(array $args = [])
 * @method Promise updateCustomVerificationEmailTemplateAsync(array $args = [])
 * @method Result updateReceiptRule(array $args = [])
 * @method Promise updateReceiptRuleAsync(array $args = [])
 * @method Result updateTemplate(array $args = [])
 * @method Promise updateTemplateAsync(array $args = [])
 * @method Result verifyDomainDkim(array $args = [])
 * @method Promise verifyDomainDkimAsync(array $args = [])
 * @method Result verifyDomainIdentity(array $args = [])
 * @method Promise verifyDomainIdentityAsync(array $args = [])
 * @method Result verifyEmailAddress(array $args = [])
 * @method Promise verifyEmailAddressAsync(array $args = [])
 * @method Result verifyEmailIdentity(array $args = [])
 * @method Promise verifyEmailIdentityAsync(array $args = [])
 */
class SesClient extends AwsClient
{
    /**
     * @deprecated This method will no longer work due to the deprecation of
     *             V2 credentials with SES as of 03/25/2021
     * Create an SMTP password for a given IAM user's credentials.
     *
     * The SMTP username is the Access Key ID for the provided credentials.
     *
     * @link http://docs.aws.amazon.com/ses/latest/DeveloperGuide/smtp-credentials.html#smtp-credentials-convert
     *
     * @param CredentialsInterface $creds
     *
     * @return string
     */
    public static function generateSmtpPassword(CredentialsInterface $creds)
    {
        static $version = "\x02";
        static $algo = 'sha256';
        static $message = 'SendRawEmail';
        $signature = hash_hmac($algo, $message, $creds->getSecretKey(), true);

        return base64_encode($version . $signature);
    }

    /**
     * Create an SMTP password for a given IAM user's credentials.
     *
     * The SMTP username is the Access Key ID for the provided credentials. This
     * utility method is not guaranteed to work indefinitely and is provided as
     * a convenience to customers using the generateSmtpPassword method.  It is
     * not recommended for use in production
     *
     * @link https://docs.aws.amazon.com/ses/latest/DeveloperGuide/smtp-credentials.html#smtp-credentials-convert
     *
     * @param CredentialsInterface $creds
     * @param string $region
     *
     * @return string
     */
    public static function generateSmtpPasswordV4(CredentialsInterface $creds, $region)
    {
        $key = $creds->getSecretKey();

        $date = "11111111";
        $service = "ses";
        $terminal = "aws4_request";
        $message = "SendRawEmail";
        $version = 0x04;

        $signature = self::sign($date, "AWS4" . $key);
        $signature = self::sign($region, $signature);
        $signature = self::sign($service, $signature);
        $signature = self::sign($terminal, $signature);
        $signature = self::sign($message, $signature);
        $signatureAndVersion = pack('c', $version) . $signature;

        return  base64_encode($signatureAndVersion);
    }

    private static function sign($key, $message) {
        return hash_hmac('sha256', $key, $message, true);
    }

    /**
     * @internal
     * @codeCoverageIgnore
     */
    public static function applyDocFilters(array $api, array $docs)
    {
        $b64 = '<div class="alert alert-info">This value will be base64 encoded on your behalf.</div>';

        $docs['shapes']['RawMessage']['append'] = $b64;

        return [
            new Service($api, ApiProvider::defaultProvider()),
            new DocModel($docs)
        ];
    }
}
