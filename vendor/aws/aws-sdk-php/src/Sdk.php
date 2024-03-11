<?php
namespace Aws;

use Aws\AccessAnalyzer\AccessAnalyzerClient;
use Aws\Account\AccountClient;
use Aws\Acm\AcmClient;
use Aws\ACMPCA\ACMPCAClient;
use Aws\AlexaForBusiness\AlexaForBusinessClient;
use Aws\Amplify\AmplifyClient;
use Aws\AmplifyBackend\AmplifyBackendClient;
use Aws\AmplifyUIBuilder\AmplifyUIBuilderClient;
use Aws\ApiGateway\ApiGatewayClient;
use Aws\ApiGatewayManagementApi\ApiGatewayManagementApiClient;
use Aws\ApiGatewayV2\ApiGatewayV2Client;
use Aws\AppConfig\AppConfigClient;
use Aws\AppConfigData\AppConfigDataClient;
use Aws\AppFabric\AppFabricClient;
use Aws\Appflow\AppflowClient;
use Aws\AppIntegrationsService\AppIntegrationsServiceClient;
use Aws\ApplicationAutoScaling\ApplicationAutoScalingClient;
use Aws\ApplicationCostProfiler\ApplicationCostProfilerClient;
use Aws\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient;
use Aws\ApplicationInsights\ApplicationInsightsClient;
use Aws\AppMesh\AppMeshClient;
use Aws\AppRegistry\AppRegistryClient;
use Aws\AppRunner\AppRunnerClient;
use Aws\Appstream\AppstreamClient;
use Aws\AppSync\AppSyncClient;
use Aws\ARCZonalShift\ARCZonalShiftClient;
use Aws\Artifact\ArtifactClient;
use Aws\Athena\AthenaClient;
use Aws\AuditManager\AuditManagerClient;
use Aws\AugmentedAIRuntime\AugmentedAIRuntimeClient;
use Aws\AutoScaling\AutoScalingClient;
use Aws\AutoScalingPlans\AutoScalingPlansClient;
use Aws\B2bi\B2biClient;
use Aws\Backup\BackupClient;
use Aws\BackupGateway\BackupGatewayClient;
use Aws\BackupStorage\BackupStorageClient;
use Aws\Batch\BatchClient;
use Aws\BCMDataExports\BCMDataExportsClient;
use Aws\Bedrock\BedrockClient;
use Aws\BedrockAgent\BedrockAgentClient;
use Aws\BedrockAgentRuntime\BedrockAgentRuntimeClient;
use Aws\BedrockRuntime\BedrockRuntimeClient;
use Aws\BillingConductor\BillingConductorClient;
use Aws\Braket\BraketClient;
use Aws\Budgets\BudgetsClient;
use Aws\Chatbot\ChatbotClient;
use Aws\Chime\ChimeClient;
use Aws\ChimeSDKIdentity\ChimeSDKIdentityClient;
use Aws\ChimeSDKMediaPipelines\ChimeSDKMediaPipelinesClient;
use Aws\ChimeSDKMeetings\ChimeSDKMeetingsClient;
use Aws\ChimeSDKMessaging\ChimeSDKMessagingClient;
use Aws\ChimeSDKVoice\ChimeSDKVoiceClient;
use Aws\CleanRooms\CleanRoomsClient;
use Aws\CleanRoomsML\CleanRoomsMLClient;
use Aws\Cloud9\Cloud9Client;
use Aws\CloudControlApi\CloudControlApiClient;
use Aws\CloudDirectory\CloudDirectoryClient;
use Aws\CloudFormation\CloudFormationClient;
use Aws\CloudFront\CloudFrontClient;
use Aws\CloudFrontKeyValueStore\CloudFrontKeyValueStoreClient;
use Aws\CloudHsm\CloudHsmClient;
use Aws\CloudHSMV2\CloudHSMV2Client;
use Aws\CloudSearch\CloudSearchClient;
use Aws\CloudSearchDomain\CloudSearchDomainClient;
use Aws\CloudTrail\CloudTrailClient;
use Aws\CloudTrailData\CloudTrailDataClient;
use Aws\CloudWatch\CloudWatchClient;
use Aws\CloudWatchEvents\CloudWatchEventsClient;
use Aws\CloudWatchEvidently\CloudWatchEvidentlyClient;
use Aws\CloudWatchLogs\CloudWatchLogsClient;
use Aws\CloudWatchRUM\CloudWatchRUMClient;
use Aws\CodeArtifact\CodeArtifactClient;
use Aws\CodeBuild\CodeBuildClient;
use Aws\CodeCatalyst\CodeCatalystClient;
use Aws\CodeCommit\CodeCommitClient;
use Aws\CodeDeploy\CodeDeployClient;
use Aws\CodeGuruProfiler\CodeGuruProfilerClient;
use Aws\CodeGuruReviewer\CodeGuruReviewerClient;
use Aws\CodeGuruSecurity\CodeGuruSecurityClient;
use Aws\CodePipeline\CodePipelineClient;
use Aws\CodeStar\CodeStarClient;
use Aws\CodeStarconnections\CodeStarconnectionsClient;
use Aws\CodeStarNotifications\CodeStarNotificationsClient;
use Aws\CognitoIdentity\CognitoIdentityClient;
use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;
use Aws\CognitoSync\CognitoSyncClient;
use Aws\Comprehend\ComprehendClient;
use Aws\ComprehendMedical\ComprehendMedicalClient;
use Aws\ComputeOptimizer\ComputeOptimizerClient;
use Aws\ConfigService\ConfigServiceClient;
use Aws\Connect\ConnectClient;
use Aws\ConnectCampaignService\ConnectCampaignServiceClient;
use Aws\ConnectCases\ConnectCasesClient;
use Aws\ConnectContactLens\ConnectContactLensClient;
use Aws\ConnectParticipant\ConnectParticipantClient;
use Aws\ConnectWisdomService\ConnectWisdomServiceClient;
use Aws\ControlTower\ControlTowerClient;
use Aws\CostandUsageReportService\CostandUsageReportServiceClient;
use Aws\CostExplorer\CostExplorerClient;
use Aws\CostOptimizationHub\CostOptimizationHubClient;
use Aws\CustomerProfiles\CustomerProfilesClient;
use Aws\DatabaseMigrationService\DatabaseMigrationServiceClient;
use Aws\DataExchange\DataExchangeClient;
use Aws\DataPipeline\DataPipelineClient;
use Aws\DataSync\DataSyncClient;
use Aws\DataZone\DataZoneClient;
use Aws\DAX\DAXClient;
use Aws\Detective\DetectiveClient;
use Aws\DeviceFarm\DeviceFarmClient;
use Aws\DevOpsGuru\DevOpsGuruClient;
use Aws\DirectConnect\DirectConnectClient;
use Aws\DirectoryService\DirectoryServiceClient;
use Aws\DLM\DLMClient;
use Aws\DocDB\DocDBClient;
use Aws\DocDBElastic\DocDBElasticClient;
use Aws\drs\drsClient;
use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDbStreams\DynamoDbStreamsClient;
use Aws\EBS\EBSClient;
use Aws\Ec2\Ec2Client;
use Aws\EC2InstanceConnect\EC2InstanceConnectClient;
use Aws\Ecr\EcrClient;
use Aws\ECRPublic\ECRPublicClient;
use Aws\Ecs\EcsClient;
use Aws\Efs\EfsClient;
use Aws\EKS\EKSClient;
use Aws\EKSAuth\EKSAuthClient;
use Aws\ElastiCache\ElastiCacheClient;
use Aws\ElasticBeanstalk\ElasticBeanstalkClient;
use Aws\ElasticInference\ElasticInferenceClient;
use Aws\ElasticLoadBalancing\ElasticLoadBalancingClient;
use Aws\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client;
use Aws\ElasticsearchService\ElasticsearchServiceClient;
use Aws\ElasticTranscoder\ElasticTranscoderClient;
use Aws\Emr\EmrClient;
use Aws\EMRContainers\EMRContainersClient;
use Aws\EMRServerless\EMRServerlessClient;
use Aws\EntityResolution\EntityResolutionClient;
use Aws\EventBridge\EventBridgeClient;
use Aws\finspace\finspaceClient;
use Aws\FinSpaceData\FinSpaceDataClient;
use Aws\Firehose\FirehoseClient;
use Aws\FIS\FISClient;
use Aws\FMS\FMSClient;
use Aws\ForecastQueryService\ForecastQueryServiceClient;
use Aws\ForecastService\ForecastServiceClient;
use Aws\FraudDetector\FraudDetectorClient;
use Aws\FreeTier\FreeTierClient;
use Aws\FSx\FSxClient;
use Aws\GameLift\GameLiftClient;
use Aws\Glacier\GlacierClient;
use Aws\GlobalAccelerator\GlobalAcceleratorClient;
use Aws\Glue\GlueClient;
use Aws\GlueDataBrew\GlueDataBrewClient;
use Aws\Greengrass\GreengrassClient;
use Aws\GreengrassV2\GreengrassV2Client;
use Aws\GroundStation\GroundStationClient;
use Aws\GuardDuty\GuardDutyClient;
use Aws\Health\HealthClient;
use Aws\HealthLake\HealthLakeClient;
use Aws\Honeycode\HoneycodeClient;
use Aws\Iam\IamClient;
use Aws\IdentityStore\IdentityStoreClient;
use Aws\imagebuilder\imagebuilderClient;
use Aws\ImportExport\ImportExportClient;
use Aws\Inspector\InspectorClient;
use Aws\Inspector2\Inspector2Client;
use Aws\InspectorScan\InspectorScanClient;
use Aws\InternetMonitor\InternetMonitorClient;
use Aws\Iot\IotClient;
use Aws\IoT1ClickDevicesService\IoT1ClickDevicesServiceClient;
use Aws\IoT1ClickProjects\IoT1ClickProjectsClient;
use Aws\IoTAnalytics\IoTAnalyticsClient;
use Aws\IotDataPlane\IotDataPlaneClient;
use Aws\IoTDeviceAdvisor\IoTDeviceAdvisorClient;
use Aws\IoTEvents\IoTEventsClient;
use Aws\IoTEventsData\IoTEventsDataClient;
use Aws\IoTFleetHub\IoTFleetHubClient;
use Aws\IoTFleetWise\IoTFleetWiseClient;
use Aws\IoTJobsDataPlane\IoTJobsDataPlaneClient;
use Aws\IoTRoboRunner\IoTRoboRunnerClient;
use Aws\IoTSecureTunneling\IoTSecureTunnelingClient;
use Aws\IoTSiteWise\IoTSiteWiseClient;
use Aws\IoTThingsGraph\IoTThingsGraphClient;
use Aws\IoTTwinMaker\IoTTwinMakerClient;
use Aws\IoTWireless\IoTWirelessClient;
use Aws\IVS\IVSClient;
use Aws\ivschat\ivschatClient;
use Aws\IVSRealTime\IVSRealTimeClient;
use Aws\Kafka\KafkaClient;
use Aws\KafkaConnect\KafkaConnectClient;
use Aws\kendra\kendraClient;
use Aws\KendraRanking\KendraRankingClient;
use Aws\Keyspaces\KeyspacesClient;
use Aws\Kinesis\KinesisClient;
use Aws\KinesisAnalytics\KinesisAnalyticsClient;
use Aws\KinesisAnalyticsV2\KinesisAnalyticsV2Client;
use Aws\KinesisVideo\KinesisVideoClient;
use Aws\KinesisVideoArchivedMedia\KinesisVideoArchivedMediaClient;
use Aws\KinesisVideoMedia\KinesisVideoMediaClient;
use Aws\KinesisVideoSignalingChannels\KinesisVideoSignalingChannelsClient;
use Aws\KinesisVideoWebRTCStorage\KinesisVideoWebRTCStorageClient;
use Aws\Kms\KmsClient;
use Aws\LakeFormation\LakeFormationClient;
use Aws\Lambda\LambdaClient;
use Aws\LaunchWizard\LaunchWizardClient;
use Aws\LexModelBuildingService\LexModelBuildingServiceClient;
use Aws\LexModelsV2\LexModelsV2Client;
use Aws\LexRuntimeService\LexRuntimeServiceClient;
use Aws\LexRuntimeV2\LexRuntimeV2Client;
use Aws\LicenseManager\LicenseManagerClient;
use Aws\LicenseManagerLinuxSubscriptions\LicenseManagerLinuxSubscriptionsClient;
use Aws\LicenseManagerUserSubscriptions\LicenseManagerUserSubscriptionsClient;
use Aws\Lightsail\LightsailClient;
use Aws\LocationService\LocationServiceClient;
use Aws\LookoutEquipment\LookoutEquipmentClient;
use Aws\LookoutforVision\LookoutforVisionClient;
use Aws\LookoutMetrics\LookoutMetricsClient;
use Aws\MachineLearning\MachineLearningClient;
use Aws\Macie2\Macie2Client;
use Aws\MainframeModernization\MainframeModernizationClient;
use Aws\ManagedBlockchain\ManagedBlockchainClient;
use Aws\ManagedBlockchainQuery\ManagedBlockchainQueryClient;
use Aws\ManagedGrafana\ManagedGrafanaClient;
use Aws\MarketplaceAgreement\MarketplaceAgreementClient;
use Aws\MarketplaceCatalog\MarketplaceCatalogClient;
use Aws\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient;
use Aws\MarketplaceDeployment\MarketplaceDeploymentClient;
use Aws\MarketplaceEntitlementService\MarketplaceEntitlementServiceClient;
use Aws\MarketplaceMetering\MarketplaceMeteringClient;
use Aws\MediaConnect\MediaConnectClient;
use Aws\MediaConvert\MediaConvertClient;
use Aws\MediaLive\MediaLiveClient;
use Aws\MediaPackage\MediaPackageClient;
use Aws\MediaPackageV2\MediaPackageV2Client;
use Aws\MediaPackageVod\MediaPackageVodClient;
use Aws\MediaStore\MediaStoreClient;
use Aws\MediaStoreData\MediaStoreDataClient;
use Aws\MediaTailor\MediaTailorClient;
use Aws\MedicalImaging\MedicalImagingClient;
use Aws\MemoryDB\MemoryDBClient;
use Aws\mgn\mgnClient;
use Aws\MigrationHub\MigrationHubClient;
use Aws\MigrationHubConfig\MigrationHubConfigClient;
use Aws\MigrationHubOrchestrator\MigrationHubOrchestratorClient;
use Aws\MigrationHubRefactorSpaces\MigrationHubRefactorSpacesClient;
use Aws\MigrationHubStrategyRecommendations\MigrationHubStrategyRecommendationsClient;
use Aws\Mobile\MobileClient;
use Aws\MQ\MQClient;
use Aws\MTurk\MTurkClient;
use Aws\MWAA\MWAAClient;
use Aws\Neptune\NeptuneClient;
use Aws\Neptunedata\NeptunedataClient;
use Aws\NeptuneGraph\NeptuneGraphClient;
use Aws\NetworkFirewall\NetworkFirewallClient;
use Aws\NetworkManager\NetworkManagerClient;
use Aws\NetworkMonitor\NetworkMonitorClient;
use Aws\NimbleStudio\NimbleStudioClient;
use Aws\OAM\OAMClient;
use Aws\Omics\OmicsClient;
use Aws\OpenSearchServerless\OpenSearchServerlessClient;
use Aws\OpenSearchService\OpenSearchServiceClient;
use Aws\OpsWorks\OpsWorksClient;
use Aws\OpsWorksCM\OpsWorksCMClient;
use Aws\Organizations\OrganizationsClient;
use Aws\OSIS\OSISClient;
use Aws\Outposts\OutpostsClient;
use Aws\Panorama\PanoramaClient;
use Aws\PaymentCryptography\PaymentCryptographyClient;
use Aws\PaymentCryptographyData\PaymentCryptographyDataClient;
use Aws\PcaConnectorAd\PcaConnectorAdClient;
use Aws\Personalize\PersonalizeClient;
use Aws\PersonalizeEvents\PersonalizeEventsClient;
use Aws\PersonalizeRuntime\PersonalizeRuntimeClient;
use Aws\PI\PIClient;
use Aws\Pinpoint\PinpointClient;
use Aws\PinpointEmail\PinpointEmailClient;
use Aws\PinpointSMSVoice\PinpointSMSVoiceClient;
use Aws\PinpointSMSVoiceV2\PinpointSMSVoiceV2Client;
use Aws\Pipes\PipesClient;
use Aws\Polly\PollyClient;
use Aws\Pricing\PricingClient;
use Aws\PrivateNetworks\PrivateNetworksClient;
use Aws\PrometheusService\PrometheusServiceClient;
use Aws\Proton\ProtonClient;
use Aws\QBusiness\QBusinessClient;
use Aws\QConnect\QConnectClient;
use Aws\QLDB\QLDBClient;
use Aws\QLDBSession\QLDBSessionClient;
use Aws\QuickSight\QuickSightClient;
use Aws\RAM\RAMClient;
use Aws\Rds\RdsClient;
use Aws\RDSDataService\RDSDataServiceClient;
use Aws\RecycleBin\RecycleBinClient;
use Aws\Redshift\RedshiftClient;
use Aws\RedshiftDataAPIService\RedshiftDataAPIServiceClient;
use Aws\RedshiftServerless\RedshiftServerlessClient;
use Aws\Rekognition\RekognitionClient;
use Aws\Repostspace\RepostspaceClient;
use Aws\ResilienceHub\ResilienceHubClient;
use Aws\ResourceExplorer2\ResourceExplorer2Client;
use Aws\ResourceGroups\ResourceGroupsClient;
use Aws\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient;
use Aws\RoboMaker\RoboMakerClient;
use Aws\RolesAnywhere\RolesAnywhereClient;
use Aws\Route53\Route53Client;
use Aws\Route53Domains\Route53DomainsClient;
use Aws\Route53RecoveryCluster\Route53RecoveryClusterClient;
use Aws\Route53RecoveryControlConfig\Route53RecoveryControlConfigClient;
use Aws\Route53RecoveryReadiness\Route53RecoveryReadinessClient;
use Aws\Route53Resolver\Route53ResolverClient;
use Aws\S3\S3Client;
use Aws\S3\S3MultiRegionClient;
use Aws\S3Control\S3ControlClient;
use Aws\S3Outposts\S3OutpostsClient;
use Aws\SageMaker\SageMakerClient;
use Aws\SagemakerEdgeManager\SagemakerEdgeManagerClient;
use Aws\SageMakerFeatureStoreRuntime\SageMakerFeatureStoreRuntimeClient;
use Aws\SageMakerGeospatial\SageMakerGeospatialClient;
use Aws\SageMakerMetrics\SageMakerMetricsClient;
use Aws\SageMakerRuntime\SageMakerRuntimeClient;
use Aws\SavingsPlans\SavingsPlansClient;
use Aws\Scheduler\SchedulerClient;
use Aws\Schemas\SchemasClient;
use Aws\SecretsManager\SecretsManagerClient;
use Aws\SecurityHub\SecurityHubClient;
use Aws\SecurityLake\SecurityLakeClient;
use Aws\ServerlessApplicationRepository\ServerlessApplicationRepositoryClient;
use Aws\ServiceCatalog\ServiceCatalogClient;
use Aws\ServiceDiscovery\ServiceDiscoveryClient;
use Aws\ServiceQuotas\ServiceQuotasClient;
use Aws\Ses\SesClient;
use Aws\SesV2\SesV2Client;
use Aws\Sfn\SfnClient;
use Aws\Shield\ShieldClient;
use Aws\signer\signerClient;
use Aws\SimSpaceWeaver\SimSpaceWeaverClient;
use Aws\Sms\SmsClient;
use Aws\SnowBall\SnowBallClient;
use Aws\SnowDeviceManagement\SnowDeviceManagementClient;
use Aws\Sns\SnsClient;
use Aws\Sqs\SqsClient;
use Aws\Ssm\SsmClient;
use Aws\SSMContacts\SSMContactsClient;
use Aws\SSMIncidents\SSMIncidentsClient;
use Aws\SsmSap\SsmSapClient;
use Aws\SSO\SSOClient;
use Aws\SSOAdmin\SSOAdminClient;
use Aws\SSOOIDC\SSOOIDCClient;
use Aws\StorageGateway\StorageGatewayClient;
use Aws\Sts\StsClient;
use Aws\SupplyChain\SupplyChainClient;
use Aws\Support\SupportClient;
use Aws\SupportApp\SupportAppClient;
use Aws\Swf\SwfClient;
use Aws\Synthetics\SyntheticsClient;
use Aws\Textract\TextractClient;
use Aws\TimestreamQuery\TimestreamQueryClient;
use Aws\TimestreamWrite\TimestreamWriteClient;
use Aws\Tnb\TnbClient;
use Aws\TranscribeService\TranscribeServiceClient;
use Aws\Transfer\TransferClient;
use Aws\Translate\TranslateClient;
use Aws\TrustedAdvisor\TrustedAdvisorClient;
use Aws\VerifiedPermissions\VerifiedPermissionsClient;
use Aws\VoiceID\VoiceIDClient;
use Aws\VPCLattice\VPCLatticeClient;
use Aws\Waf\WafClient;
use Aws\WafRegional\WafRegionalClient;
use Aws\WAFV2\WAFV2Client;
use Aws\WellArchitected\WellArchitectedClient;
use Aws\WorkDocs\WorkDocsClient;
use Aws\WorkLink\WorkLinkClient;
use Aws\WorkMail\WorkMailClient;
use Aws\WorkMailMessageFlow\WorkMailMessageFlowClient;
use Aws\WorkSpaces\WorkSpacesClient;
use Aws\WorkSpacesThinClient\WorkSpacesThinClientClient;
use Aws\WorkSpacesWeb\WorkSpacesWebClient;
use Aws\XRay\XRayClient;
use BadMethodCallException;
use InvalidArgumentException;

/**
 * Builds AWS clients based on configuration settings.
 *
 * @method ACMPCAClient createACMPCA(array $args = [])
 * @method MultiRegionClient createMultiRegionACMPCA(array $args = [])
 * @method ARCZonalShiftClient createARCZonalShift(array $args = [])
 * @method MultiRegionClient createMultiRegionARCZonalShift(array $args = [])
 * @method AccessAnalyzerClient createAccessAnalyzer(array $args = [])
 * @method MultiRegionClient createMultiRegionAccessAnalyzer(array $args = [])
 * @method AccountClient createAccount(array $args = [])
 * @method MultiRegionClient createMultiRegionAccount(array $args = [])
 * @method AcmClient createAcm(array $args = [])
 * @method MultiRegionClient createMultiRegionAcm(array $args = [])
 * @method AlexaForBusinessClient createAlexaForBusiness(array $args = [])
 * @method MultiRegionClient createMultiRegionAlexaForBusiness(array $args = [])
 * @method AmplifyClient createAmplify(array $args = [])
 * @method MultiRegionClient createMultiRegionAmplify(array $args = [])
 * @method AmplifyBackendClient createAmplifyBackend(array $args = [])
 * @method MultiRegionClient createMultiRegionAmplifyBackend(array $args = [])
 * @method AmplifyUIBuilderClient createAmplifyUIBuilder(array $args = [])
 * @method MultiRegionClient createMultiRegionAmplifyUIBuilder(array $args = [])
 * @method ApiGatewayClient createApiGateway(array $args = [])
 * @method MultiRegionClient createMultiRegionApiGateway(array $args = [])
 * @method ApiGatewayManagementApiClient createApiGatewayManagementApi(array $args = [])
 * @method MultiRegionClient createMultiRegionApiGatewayManagementApi(array $args = [])
 * @method ApiGatewayV2Client createApiGatewayV2(array $args = [])
 * @method MultiRegionClient createMultiRegionApiGatewayV2(array $args = [])
 * @method AppConfigClient createAppConfig(array $args = [])
 * @method MultiRegionClient createMultiRegionAppConfig(array $args = [])
 * @method AppConfigDataClient createAppConfigData(array $args = [])
 * @method MultiRegionClient createMultiRegionAppConfigData(array $args = [])
 * @method AppFabricClient createAppFabric(array $args = [])
 * @method MultiRegionClient createMultiRegionAppFabric(array $args = [])
 * @method AppIntegrationsServiceClient createAppIntegrationsService(array $args = [])
 * @method MultiRegionClient createMultiRegionAppIntegrationsService(array $args = [])
 * @method AppMeshClient createAppMesh(array $args = [])
 * @method MultiRegionClient createMultiRegionAppMesh(array $args = [])
 * @method AppRegistryClient createAppRegistry(array $args = [])
 * @method MultiRegionClient createMultiRegionAppRegistry(array $args = [])
 * @method AppRunnerClient createAppRunner(array $args = [])
 * @method MultiRegionClient createMultiRegionAppRunner(array $args = [])
 * @method AppSyncClient createAppSync(array $args = [])
 * @method MultiRegionClient createMultiRegionAppSync(array $args = [])
 * @method AppflowClient createAppflow(array $args = [])
 * @method MultiRegionClient createMultiRegionAppflow(array $args = [])
 * @method ApplicationAutoScalingClient createApplicationAutoScaling(array $args = [])
 * @method MultiRegionClient createMultiRegionApplicationAutoScaling(array $args = [])
 * @method ApplicationCostProfilerClient createApplicationCostProfiler(array $args = [])
 * @method MultiRegionClient createMultiRegionApplicationCostProfiler(array $args = [])
 * @method ApplicationDiscoveryServiceClient createApplicationDiscoveryService(array $args = [])
 * @method MultiRegionClient createMultiRegionApplicationDiscoveryService(array $args = [])
 * @method ApplicationInsightsClient createApplicationInsights(array $args = [])
 * @method MultiRegionClient createMultiRegionApplicationInsights(array $args = [])
 * @method AppstreamClient createAppstream(array $args = [])
 * @method MultiRegionClient createMultiRegionAppstream(array $args = [])
 * @method ArtifactClient createArtifact(array $args = [])
 * @method MultiRegionClient createMultiRegionArtifact(array $args = [])
 * @method AthenaClient createAthena(array $args = [])
 * @method MultiRegionClient createMultiRegionAthena(array $args = [])
 * @method AuditManagerClient createAuditManager(array $args = [])
 * @method MultiRegionClient createMultiRegionAuditManager(array $args = [])
 * @method AugmentedAIRuntimeClient createAugmentedAIRuntime(array $args = [])
 * @method MultiRegionClient createMultiRegionAugmentedAIRuntime(array $args = [])
 * @method AutoScalingClient createAutoScaling(array $args = [])
 * @method MultiRegionClient createMultiRegionAutoScaling(array $args = [])
 * @method AutoScalingPlansClient createAutoScalingPlans(array $args = [])
 * @method MultiRegionClient createMultiRegionAutoScalingPlans(array $args = [])
 * @method B2biClient createB2bi(array $args = [])
 * @method MultiRegionClient createMultiRegionB2bi(array $args = [])
 * @method BCMDataExportsClient createBCMDataExports(array $args = [])
 * @method MultiRegionClient createMultiRegionBCMDataExports(array $args = [])
 * @method BackupClient createBackup(array $args = [])
 * @method MultiRegionClient createMultiRegionBackup(array $args = [])
 * @method BackupGatewayClient createBackupGateway(array $args = [])
 * @method MultiRegionClient createMultiRegionBackupGateway(array $args = [])
 * @method BackupStorageClient createBackupStorage(array $args = [])
 * @method MultiRegionClient createMultiRegionBackupStorage(array $args = [])
 * @method BatchClient createBatch(array $args = [])
 * @method MultiRegionClient createMultiRegionBatch(array $args = [])
 * @method BedrockClient createBedrock(array $args = [])
 * @method MultiRegionClient createMultiRegionBedrock(array $args = [])
 * @method BedrockAgentClient createBedrockAgent(array $args = [])
 * @method MultiRegionClient createMultiRegionBedrockAgent(array $args = [])
 * @method BedrockAgentRuntimeClient createBedrockAgentRuntime(array $args = [])
 * @method MultiRegionClient createMultiRegionBedrockAgentRuntime(array $args = [])
 * @method BedrockRuntimeClient createBedrockRuntime(array $args = [])
 * @method MultiRegionClient createMultiRegionBedrockRuntime(array $args = [])
 * @method BillingConductorClient createBillingConductor(array $args = [])
 * @method MultiRegionClient createMultiRegionBillingConductor(array $args = [])
 * @method BraketClient createBraket(array $args = [])
 * @method MultiRegionClient createMultiRegionBraket(array $args = [])
 * @method BudgetsClient createBudgets(array $args = [])
 * @method MultiRegionClient createMultiRegionBudgets(array $args = [])
 * @method ChatbotClient createChatbot(array $args = [])
 * @method MultiRegionClient createMultiRegionChatbot(array $args = [])
 * @method ChimeClient createChime(array $args = [])
 * @method MultiRegionClient createMultiRegionChime(array $args = [])
 * @method ChimeSDKIdentityClient createChimeSDKIdentity(array $args = [])
 * @method MultiRegionClient createMultiRegionChimeSDKIdentity(array $args = [])
 * @method ChimeSDKMediaPipelinesClient createChimeSDKMediaPipelines(array $args = [])
 * @method MultiRegionClient createMultiRegionChimeSDKMediaPipelines(array $args = [])
 * @method ChimeSDKMeetingsClient createChimeSDKMeetings(array $args = [])
 * @method MultiRegionClient createMultiRegionChimeSDKMeetings(array $args = [])
 * @method ChimeSDKMessagingClient createChimeSDKMessaging(array $args = [])
 * @method MultiRegionClient createMultiRegionChimeSDKMessaging(array $args = [])
 * @method ChimeSDKVoiceClient createChimeSDKVoice(array $args = [])
 * @method MultiRegionClient createMultiRegionChimeSDKVoice(array $args = [])
 * @method CleanRoomsClient createCleanRooms(array $args = [])
 * @method MultiRegionClient createMultiRegionCleanRooms(array $args = [])
 * @method CleanRoomsMLClient createCleanRoomsML(array $args = [])
 * @method MultiRegionClient createMultiRegionCleanRoomsML(array $args = [])
 * @method Cloud9Client createCloud9(array $args = [])
 * @method MultiRegionClient createMultiRegionCloud9(array $args = [])
 * @method CloudControlApiClient createCloudControlApi(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudControlApi(array $args = [])
 * @method CloudDirectoryClient createCloudDirectory(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudDirectory(array $args = [])
 * @method CloudFormationClient createCloudFormation(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudFormation(array $args = [])
 * @method CloudFrontClient createCloudFront(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudFront(array $args = [])
 * @method CloudFrontKeyValueStoreClient createCloudFrontKeyValueStore(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudFrontKeyValueStore(array $args = [])
 * @method CloudHSMV2Client createCloudHSMV2(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudHSMV2(array $args = [])
 * @method CloudHsmClient createCloudHsm(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudHsm(array $args = [])
 * @method CloudSearchClient createCloudSearch(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudSearch(array $args = [])
 * @method CloudSearchDomainClient createCloudSearchDomain(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudSearchDomain(array $args = [])
 * @method CloudTrailClient createCloudTrail(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudTrail(array $args = [])
 * @method CloudTrailDataClient createCloudTrailData(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudTrailData(array $args = [])
 * @method CloudWatchClient createCloudWatch(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudWatch(array $args = [])
 * @method CloudWatchEventsClient createCloudWatchEvents(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudWatchEvents(array $args = [])
 * @method CloudWatchEvidentlyClient createCloudWatchEvidently(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudWatchEvidently(array $args = [])
 * @method CloudWatchLogsClient createCloudWatchLogs(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudWatchLogs(array $args = [])
 * @method CloudWatchRUMClient createCloudWatchRUM(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudWatchRUM(array $args = [])
 * @method CodeArtifactClient createCodeArtifact(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeArtifact(array $args = [])
 * @method CodeBuildClient createCodeBuild(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeBuild(array $args = [])
 * @method CodeCatalystClient createCodeCatalyst(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeCatalyst(array $args = [])
 * @method CodeCommitClient createCodeCommit(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeCommit(array $args = [])
 * @method CodeDeployClient createCodeDeploy(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeDeploy(array $args = [])
 * @method CodeGuruProfilerClient createCodeGuruProfiler(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeGuruProfiler(array $args = [])
 * @method CodeGuruReviewerClient createCodeGuruReviewer(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeGuruReviewer(array $args = [])
 * @method CodeGuruSecurityClient createCodeGuruSecurity(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeGuruSecurity(array $args = [])
 * @method CodePipelineClient createCodePipeline(array $args = [])
 * @method MultiRegionClient createMultiRegionCodePipeline(array $args = [])
 * @method CodeStarClient createCodeStar(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeStar(array $args = [])
 * @method CodeStarNotificationsClient createCodeStarNotifications(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeStarNotifications(array $args = [])
 * @method CodeStarconnectionsClient createCodeStarconnections(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeStarconnections(array $args = [])
 * @method CognitoIdentityClient createCognitoIdentity(array $args = [])
 * @method MultiRegionClient createMultiRegionCognitoIdentity(array $args = [])
 * @method CognitoIdentityProviderClient createCognitoIdentityProvider(array $args = [])
 * @method MultiRegionClient createMultiRegionCognitoIdentityProvider(array $args = [])
 * @method CognitoSyncClient createCognitoSync(array $args = [])
 * @method MultiRegionClient createMultiRegionCognitoSync(array $args = [])
 * @method ComprehendClient createComprehend(array $args = [])
 * @method MultiRegionClient createMultiRegionComprehend(array $args = [])
 * @method ComprehendMedicalClient createComprehendMedical(array $args = [])
 * @method MultiRegionClient createMultiRegionComprehendMedical(array $args = [])
 * @method ComputeOptimizerClient createComputeOptimizer(array $args = [])
 * @method MultiRegionClient createMultiRegionComputeOptimizer(array $args = [])
 * @method ConfigServiceClient createConfigService(array $args = [])
 * @method MultiRegionClient createMultiRegionConfigService(array $args = [])
 * @method ConnectClient createConnect(array $args = [])
 * @method MultiRegionClient createMultiRegionConnect(array $args = [])
 * @method ConnectCampaignServiceClient createConnectCampaignService(array $args = [])
 * @method MultiRegionClient createMultiRegionConnectCampaignService(array $args = [])
 * @method ConnectCasesClient createConnectCases(array $args = [])
 * @method MultiRegionClient createMultiRegionConnectCases(array $args = [])
 * @method ConnectContactLensClient createConnectContactLens(array $args = [])
 * @method MultiRegionClient createMultiRegionConnectContactLens(array $args = [])
 * @method ConnectParticipantClient createConnectParticipant(array $args = [])
 * @method MultiRegionClient createMultiRegionConnectParticipant(array $args = [])
 * @method ConnectWisdomServiceClient createConnectWisdomService(array $args = [])
 * @method MultiRegionClient createMultiRegionConnectWisdomService(array $args = [])
 * @method ControlTowerClient createControlTower(array $args = [])
 * @method MultiRegionClient createMultiRegionControlTower(array $args = [])
 * @method CostExplorerClient createCostExplorer(array $args = [])
 * @method MultiRegionClient createMultiRegionCostExplorer(array $args = [])
 * @method CostOptimizationHubClient createCostOptimizationHub(array $args = [])
 * @method MultiRegionClient createMultiRegionCostOptimizationHub(array $args = [])
 * @method CostandUsageReportServiceClient createCostandUsageReportService(array $args = [])
 * @method MultiRegionClient createMultiRegionCostandUsageReportService(array $args = [])
 * @method CustomerProfilesClient createCustomerProfiles(array $args = [])
 * @method MultiRegionClient createMultiRegionCustomerProfiles(array $args = [])
 * @method DAXClient createDAX(array $args = [])
 * @method MultiRegionClient createMultiRegionDAX(array $args = [])
 * @method DLMClient createDLM(array $args = [])
 * @method MultiRegionClient createMultiRegionDLM(array $args = [])
 * @method DataExchangeClient createDataExchange(array $args = [])
 * @method MultiRegionClient createMultiRegionDataExchange(array $args = [])
 * @method DataPipelineClient createDataPipeline(array $args = [])
 * @method MultiRegionClient createMultiRegionDataPipeline(array $args = [])
 * @method DataSyncClient createDataSync(array $args = [])
 * @method MultiRegionClient createMultiRegionDataSync(array $args = [])
 * @method DataZoneClient createDataZone(array $args = [])
 * @method MultiRegionClient createMultiRegionDataZone(array $args = [])
 * @method DatabaseMigrationServiceClient createDatabaseMigrationService(array $args = [])
 * @method MultiRegionClient createMultiRegionDatabaseMigrationService(array $args = [])
 * @method DetectiveClient createDetective(array $args = [])
 * @method MultiRegionClient createMultiRegionDetective(array $args = [])
 * @method DevOpsGuruClient createDevOpsGuru(array $args = [])
 * @method MultiRegionClient createMultiRegionDevOpsGuru(array $args = [])
 * @method DeviceFarmClient createDeviceFarm(array $args = [])
 * @method MultiRegionClient createMultiRegionDeviceFarm(array $args = [])
 * @method DirectConnectClient createDirectConnect(array $args = [])
 * @method MultiRegionClient createMultiRegionDirectConnect(array $args = [])
 * @method DirectoryServiceClient createDirectoryService(array $args = [])
 * @method MultiRegionClient createMultiRegionDirectoryService(array $args = [])
 * @method DocDBClient createDocDB(array $args = [])
 * @method MultiRegionClient createMultiRegionDocDB(array $args = [])
 * @method DocDBElasticClient createDocDBElastic(array $args = [])
 * @method MultiRegionClient createMultiRegionDocDBElastic(array $args = [])
 * @method DynamoDbClient createDynamoDb(array $args = [])
 * @method MultiRegionClient createMultiRegionDynamoDb(array $args = [])
 * @method DynamoDbStreamsClient createDynamoDbStreams(array $args = [])
 * @method MultiRegionClient createMultiRegionDynamoDbStreams(array $args = [])
 * @method EBSClient createEBS(array $args = [])
 * @method MultiRegionClient createMultiRegionEBS(array $args = [])
 * @method EC2InstanceConnectClient createEC2InstanceConnect(array $args = [])
 * @method MultiRegionClient createMultiRegionEC2InstanceConnect(array $args = [])
 * @method ECRPublicClient createECRPublic(array $args = [])
 * @method MultiRegionClient createMultiRegionECRPublic(array $args = [])
 * @method EKSClient createEKS(array $args = [])
 * @method MultiRegionClient createMultiRegionEKS(array $args = [])
 * @method EKSAuthClient createEKSAuth(array $args = [])
 * @method MultiRegionClient createMultiRegionEKSAuth(array $args = [])
 * @method EMRContainersClient createEMRContainers(array $args = [])
 * @method MultiRegionClient createMultiRegionEMRContainers(array $args = [])
 * @method EMRServerlessClient createEMRServerless(array $args = [])
 * @method MultiRegionClient createMultiRegionEMRServerless(array $args = [])
 * @method Ec2Client createEc2(array $args = [])
 * @method MultiRegionClient createMultiRegionEc2(array $args = [])
 * @method EcrClient createEcr(array $args = [])
 * @method MultiRegionClient createMultiRegionEcr(array $args = [])
 * @method EcsClient createEcs(array $args = [])
 * @method MultiRegionClient createMultiRegionEcs(array $args = [])
 * @method EfsClient createEfs(array $args = [])
 * @method MultiRegionClient createMultiRegionEfs(array $args = [])
 * @method ElastiCacheClient createElastiCache(array $args = [])
 * @method MultiRegionClient createMultiRegionElastiCache(array $args = [])
 * @method ElasticBeanstalkClient createElasticBeanstalk(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticBeanstalk(array $args = [])
 * @method ElasticInferenceClient createElasticInference(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticInference(array $args = [])
 * @method ElasticLoadBalancingClient createElasticLoadBalancing(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticLoadBalancing(array $args = [])
 * @method ElasticLoadBalancingV2Client createElasticLoadBalancingV2(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticLoadBalancingV2(array $args = [])
 * @method ElasticTranscoderClient createElasticTranscoder(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticTranscoder(array $args = [])
 * @method ElasticsearchServiceClient createElasticsearchService(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticsearchService(array $args = [])
 * @method EmrClient createEmr(array $args = [])
 * @method MultiRegionClient createMultiRegionEmr(array $args = [])
 * @method EntityResolutionClient createEntityResolution(array $args = [])
 * @method MultiRegionClient createMultiRegionEntityResolution(array $args = [])
 * @method EventBridgeClient createEventBridge(array $args = [])
 * @method MultiRegionClient createMultiRegionEventBridge(array $args = [])
 * @method FISClient createFIS(array $args = [])
 * @method MultiRegionClient createMultiRegionFIS(array $args = [])
 * @method FMSClient createFMS(array $args = [])
 * @method MultiRegionClient createMultiRegionFMS(array $args = [])
 * @method FSxClient createFSx(array $args = [])
 * @method MultiRegionClient createMultiRegionFSx(array $args = [])
 * @method FinSpaceDataClient createFinSpaceData(array $args = [])
 * @method MultiRegionClient createMultiRegionFinSpaceData(array $args = [])
 * @method FirehoseClient createFirehose(array $args = [])
 * @method MultiRegionClient createMultiRegionFirehose(array $args = [])
 * @method ForecastQueryServiceClient createForecastQueryService(array $args = [])
 * @method MultiRegionClient createMultiRegionForecastQueryService(array $args = [])
 * @method ForecastServiceClient createForecastService(array $args = [])
 * @method MultiRegionClient createMultiRegionForecastService(array $args = [])
 * @method FraudDetectorClient createFraudDetector(array $args = [])
 * @method MultiRegionClient createMultiRegionFraudDetector(array $args = [])
 * @method FreeTierClient createFreeTier(array $args = [])
 * @method MultiRegionClient createMultiRegionFreeTier(array $args = [])
 * @method GameLiftClient createGameLift(array $args = [])
 * @method MultiRegionClient createMultiRegionGameLift(array $args = [])
 * @method GlacierClient createGlacier(array $args = [])
 * @method MultiRegionClient createMultiRegionGlacier(array $args = [])
 * @method GlobalAcceleratorClient createGlobalAccelerator(array $args = [])
 * @method MultiRegionClient createMultiRegionGlobalAccelerator(array $args = [])
 * @method GlueClient createGlue(array $args = [])
 * @method MultiRegionClient createMultiRegionGlue(array $args = [])
 * @method GlueDataBrewClient createGlueDataBrew(array $args = [])
 * @method MultiRegionClient createMultiRegionGlueDataBrew(array $args = [])
 * @method GreengrassClient createGreengrass(array $args = [])
 * @method MultiRegionClient createMultiRegionGreengrass(array $args = [])
 * @method GreengrassV2Client createGreengrassV2(array $args = [])
 * @method MultiRegionClient createMultiRegionGreengrassV2(array $args = [])
 * @method GroundStationClient createGroundStation(array $args = [])
 * @method MultiRegionClient createMultiRegionGroundStation(array $args = [])
 * @method GuardDutyClient createGuardDuty(array $args = [])
 * @method MultiRegionClient createMultiRegionGuardDuty(array $args = [])
 * @method HealthClient createHealth(array $args = [])
 * @method MultiRegionClient createMultiRegionHealth(array $args = [])
 * @method HealthLakeClient createHealthLake(array $args = [])
 * @method MultiRegionClient createMultiRegionHealthLake(array $args = [])
 * @method HoneycodeClient createHoneycode(array $args = [])
 * @method MultiRegionClient createMultiRegionHoneycode(array $args = [])
 * @method IVSClient createIVS(array $args = [])
 * @method MultiRegionClient createMultiRegionIVS(array $args = [])
 * @method IVSRealTimeClient createIVSRealTime(array $args = [])
 * @method MultiRegionClient createMultiRegionIVSRealTime(array $args = [])
 * @method IamClient createIam(array $args = [])
 * @method MultiRegionClient createMultiRegionIam(array $args = [])
 * @method IdentityStoreClient createIdentityStore(array $args = [])
 * @method MultiRegionClient createMultiRegionIdentityStore(array $args = [])
 * @method ImportExportClient createImportExport(array $args = [])
 * @method MultiRegionClient createMultiRegionImportExport(array $args = [])
 * @method InspectorClient createInspector(array $args = [])
 * @method MultiRegionClient createMultiRegionInspector(array $args = [])
 * @method Inspector2Client createInspector2(array $args = [])
 * @method MultiRegionClient createMultiRegionInspector2(array $args = [])
 * @method InspectorScanClient createInspectorScan(array $args = [])
 * @method MultiRegionClient createMultiRegionInspectorScan(array $args = [])
 * @method InternetMonitorClient createInternetMonitor(array $args = [])
 * @method MultiRegionClient createMultiRegionInternetMonitor(array $args = [])
 * @method IoT1ClickDevicesServiceClient createIoT1ClickDevicesService(array $args = [])
 * @method MultiRegionClient createMultiRegionIoT1ClickDevicesService(array $args = [])
 * @method IoT1ClickProjectsClient createIoT1ClickProjects(array $args = [])
 * @method MultiRegionClient createMultiRegionIoT1ClickProjects(array $args = [])
 * @method IoTAnalyticsClient createIoTAnalytics(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTAnalytics(array $args = [])
 * @method IoTDeviceAdvisorClient createIoTDeviceAdvisor(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTDeviceAdvisor(array $args = [])
 * @method IoTEventsClient createIoTEvents(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTEvents(array $args = [])
 * @method IoTEventsDataClient createIoTEventsData(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTEventsData(array $args = [])
 * @method IoTFleetHubClient createIoTFleetHub(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTFleetHub(array $args = [])
 * @method IoTFleetWiseClient createIoTFleetWise(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTFleetWise(array $args = [])
 * @method IoTJobsDataPlaneClient createIoTJobsDataPlane(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTJobsDataPlane(array $args = [])
 * @method IoTRoboRunnerClient createIoTRoboRunner(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTRoboRunner(array $args = [])
 * @method IoTSecureTunnelingClient createIoTSecureTunneling(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTSecureTunneling(array $args = [])
 * @method IoTSiteWiseClient createIoTSiteWise(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTSiteWise(array $args = [])
 * @method IoTThingsGraphClient createIoTThingsGraph(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTThingsGraph(array $args = [])
 * @method IoTTwinMakerClient createIoTTwinMaker(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTTwinMaker(array $args = [])
 * @method IoTWirelessClient createIoTWireless(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTWireless(array $args = [])
 * @method IotClient createIot(array $args = [])
 * @method MultiRegionClient createMultiRegionIot(array $args = [])
 * @method IotDataPlaneClient createIotDataPlane(array $args = [])
 * @method MultiRegionClient createMultiRegionIotDataPlane(array $args = [])
 * @method KafkaClient createKafka(array $args = [])
 * @method MultiRegionClient createMultiRegionKafka(array $args = [])
 * @method KafkaConnectClient createKafkaConnect(array $args = [])
 * @method MultiRegionClient createMultiRegionKafkaConnect(array $args = [])
 * @method KendraRankingClient createKendraRanking(array $args = [])
 * @method MultiRegionClient createMultiRegionKendraRanking(array $args = [])
 * @method KeyspacesClient createKeyspaces(array $args = [])
 * @method MultiRegionClient createMultiRegionKeyspaces(array $args = [])
 * @method KinesisClient createKinesis(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesis(array $args = [])
 * @method KinesisAnalyticsClient createKinesisAnalytics(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisAnalytics(array $args = [])
 * @method KinesisAnalyticsV2Client createKinesisAnalyticsV2(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisAnalyticsV2(array $args = [])
 * @method KinesisVideoClient createKinesisVideo(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisVideo(array $args = [])
 * @method KinesisVideoArchivedMediaClient createKinesisVideoArchivedMedia(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisVideoArchivedMedia(array $args = [])
 * @method KinesisVideoMediaClient createKinesisVideoMedia(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisVideoMedia(array $args = [])
 * @method KinesisVideoSignalingChannelsClient createKinesisVideoSignalingChannels(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisVideoSignalingChannels(array $args = [])
 * @method KinesisVideoWebRTCStorageClient createKinesisVideoWebRTCStorage(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisVideoWebRTCStorage(array $args = [])
 * @method KmsClient createKms(array $args = [])
 * @method MultiRegionClient createMultiRegionKms(array $args = [])
 * @method LakeFormationClient createLakeFormation(array $args = [])
 * @method MultiRegionClient createMultiRegionLakeFormation(array $args = [])
 * @method LambdaClient createLambda(array $args = [])
 * @method MultiRegionClient createMultiRegionLambda(array $args = [])
 * @method LaunchWizardClient createLaunchWizard(array $args = [])
 * @method MultiRegionClient createMultiRegionLaunchWizard(array $args = [])
 * @method LexModelBuildingServiceClient createLexModelBuildingService(array $args = [])
 * @method MultiRegionClient createMultiRegionLexModelBuildingService(array $args = [])
 * @method LexModelsV2Client createLexModelsV2(array $args = [])
 * @method MultiRegionClient createMultiRegionLexModelsV2(array $args = [])
 * @method LexRuntimeServiceClient createLexRuntimeService(array $args = [])
 * @method MultiRegionClient createMultiRegionLexRuntimeService(array $args = [])
 * @method LexRuntimeV2Client createLexRuntimeV2(array $args = [])
 * @method MultiRegionClient createMultiRegionLexRuntimeV2(array $args = [])
 * @method LicenseManagerClient createLicenseManager(array $args = [])
 * @method MultiRegionClient createMultiRegionLicenseManager(array $args = [])
 * @method LicenseManagerLinuxSubscriptionsClient createLicenseManagerLinuxSubscriptions(array $args = [])
 * @method MultiRegionClient createMultiRegionLicenseManagerLinuxSubscriptions(array $args = [])
 * @method LicenseManagerUserSubscriptionsClient createLicenseManagerUserSubscriptions(array $args = [])
 * @method MultiRegionClient createMultiRegionLicenseManagerUserSubscriptions(array $args = [])
 * @method LightsailClient createLightsail(array $args = [])
 * @method MultiRegionClient createMultiRegionLightsail(array $args = [])
 * @method LocationServiceClient createLocationService(array $args = [])
 * @method MultiRegionClient createMultiRegionLocationService(array $args = [])
 * @method LookoutEquipmentClient createLookoutEquipment(array $args = [])
 * @method MultiRegionClient createMultiRegionLookoutEquipment(array $args = [])
 * @method LookoutMetricsClient createLookoutMetrics(array $args = [])
 * @method MultiRegionClient createMultiRegionLookoutMetrics(array $args = [])
 * @method LookoutforVisionClient createLookoutforVision(array $args = [])
 * @method MultiRegionClient createMultiRegionLookoutforVision(array $args = [])
 * @method MQClient createMQ(array $args = [])
 * @method MultiRegionClient createMultiRegionMQ(array $args = [])
 * @method MTurkClient createMTurk(array $args = [])
 * @method MultiRegionClient createMultiRegionMTurk(array $args = [])
 * @method MWAAClient createMWAA(array $args = [])
 * @method MultiRegionClient createMultiRegionMWAA(array $args = [])
 * @method MachineLearningClient createMachineLearning(array $args = [])
 * @method MultiRegionClient createMultiRegionMachineLearning(array $args = [])
 * @method Macie2Client createMacie2(array $args = [])
 * @method MultiRegionClient createMultiRegionMacie2(array $args = [])
 * @method MainframeModernizationClient createMainframeModernization(array $args = [])
 * @method MultiRegionClient createMultiRegionMainframeModernization(array $args = [])
 * @method ManagedBlockchainClient createManagedBlockchain(array $args = [])
 * @method MultiRegionClient createMultiRegionManagedBlockchain(array $args = [])
 * @method ManagedBlockchainQueryClient createManagedBlockchainQuery(array $args = [])
 * @method MultiRegionClient createMultiRegionManagedBlockchainQuery(array $args = [])
 * @method ManagedGrafanaClient createManagedGrafana(array $args = [])
 * @method MultiRegionClient createMultiRegionManagedGrafana(array $args = [])
 * @method MarketplaceAgreementClient createMarketplaceAgreement(array $args = [])
 * @method MultiRegionClient createMultiRegionMarketplaceAgreement(array $args = [])
 * @method MarketplaceCatalogClient createMarketplaceCatalog(array $args = [])
 * @method MultiRegionClient createMultiRegionMarketplaceCatalog(array $args = [])
 * @method MarketplaceCommerceAnalyticsClient createMarketplaceCommerceAnalytics(array $args = [])
 * @method MultiRegionClient createMultiRegionMarketplaceCommerceAnalytics(array $args = [])
 * @method MarketplaceDeploymentClient createMarketplaceDeployment(array $args = [])
 * @method MultiRegionClient createMultiRegionMarketplaceDeployment(array $args = [])
 * @method MarketplaceEntitlementServiceClient createMarketplaceEntitlementService(array $args = [])
 * @method MultiRegionClient createMultiRegionMarketplaceEntitlementService(array $args = [])
 * @method MarketplaceMeteringClient createMarketplaceMetering(array $args = [])
 * @method MultiRegionClient createMultiRegionMarketplaceMetering(array $args = [])
 * @method MediaConnectClient createMediaConnect(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaConnect(array $args = [])
 * @method MediaConvertClient createMediaConvert(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaConvert(array $args = [])
 * @method MediaLiveClient createMediaLive(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaLive(array $args = [])
 * @method MediaPackageClient createMediaPackage(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaPackage(array $args = [])
 * @method MediaPackageV2Client createMediaPackageV2(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaPackageV2(array $args = [])
 * @method MediaPackageVodClient createMediaPackageVod(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaPackageVod(array $args = [])
 * @method MediaStoreClient createMediaStore(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaStore(array $args = [])
 * @method MediaStoreDataClient createMediaStoreData(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaStoreData(array $args = [])
 * @method MediaTailorClient createMediaTailor(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaTailor(array $args = [])
 * @method MedicalImagingClient createMedicalImaging(array $args = [])
 * @method MultiRegionClient createMultiRegionMedicalImaging(array $args = [])
 * @method MemoryDBClient createMemoryDB(array $args = [])
 * @method MultiRegionClient createMultiRegionMemoryDB(array $args = [])
 * @method MigrationHubClient createMigrationHub(array $args = [])
 * @method MultiRegionClient createMultiRegionMigrationHub(array $args = [])
 * @method MigrationHubConfigClient createMigrationHubConfig(array $args = [])
 * @method MultiRegionClient createMultiRegionMigrationHubConfig(array $args = [])
 * @method MigrationHubOrchestratorClient createMigrationHubOrchestrator(array $args = [])
 * @method MultiRegionClient createMultiRegionMigrationHubOrchestrator(array $args = [])
 * @method MigrationHubRefactorSpacesClient createMigrationHubRefactorSpaces(array $args = [])
 * @method MultiRegionClient createMultiRegionMigrationHubRefactorSpaces(array $args = [])
 * @method MigrationHubStrategyRecommendationsClient createMigrationHubStrategyRecommendations(array $args = [])
 * @method MultiRegionClient createMultiRegionMigrationHubStrategyRecommendations(array $args = [])
 * @method MobileClient createMobile(array $args = [])
 * @method MultiRegionClient createMultiRegionMobile(array $args = [])
 * @method NeptuneClient createNeptune(array $args = [])
 * @method MultiRegionClient createMultiRegionNeptune(array $args = [])
 * @method NeptuneGraphClient createNeptuneGraph(array $args = [])
 * @method MultiRegionClient createMultiRegionNeptuneGraph(array $args = [])
 * @method NeptunedataClient createNeptunedata(array $args = [])
 * @method MultiRegionClient createMultiRegionNeptunedata(array $args = [])
 * @method NetworkFirewallClient createNetworkFirewall(array $args = [])
 * @method MultiRegionClient createMultiRegionNetworkFirewall(array $args = [])
 * @method NetworkManagerClient createNetworkManager(array $args = [])
 * @method MultiRegionClient createMultiRegionNetworkManager(array $args = [])
 * @method NetworkMonitorClient createNetworkMonitor(array $args = [])
 * @method MultiRegionClient createMultiRegionNetworkMonitor(array $args = [])
 * @method NimbleStudioClient createNimbleStudio(array $args = [])
 * @method MultiRegionClient createMultiRegionNimbleStudio(array $args = [])
 * @method OAMClient createOAM(array $args = [])
 * @method MultiRegionClient createMultiRegionOAM(array $args = [])
 * @method OSISClient createOSIS(array $args = [])
 * @method MultiRegionClient createMultiRegionOSIS(array $args = [])
 * @method OmicsClient createOmics(array $args = [])
 * @method MultiRegionClient createMultiRegionOmics(array $args = [])
 * @method OpenSearchServerlessClient createOpenSearchServerless(array $args = [])
 * @method MultiRegionClient createMultiRegionOpenSearchServerless(array $args = [])
 * @method OpenSearchServiceClient createOpenSearchService(array $args = [])
 * @method MultiRegionClient createMultiRegionOpenSearchService(array $args = [])
 * @method OpsWorksClient createOpsWorks(array $args = [])
 * @method MultiRegionClient createMultiRegionOpsWorks(array $args = [])
 * @method OpsWorksCMClient createOpsWorksCM(array $args = [])
 * @method MultiRegionClient createMultiRegionOpsWorksCM(array $args = [])
 * @method OrganizationsClient createOrganizations(array $args = [])
 * @method MultiRegionClient createMultiRegionOrganizations(array $args = [])
 * @method OutpostsClient createOutposts(array $args = [])
 * @method MultiRegionClient createMultiRegionOutposts(array $args = [])
 * @method PIClient createPI(array $args = [])
 * @method MultiRegionClient createMultiRegionPI(array $args = [])
 * @method PanoramaClient createPanorama(array $args = [])
 * @method MultiRegionClient createMultiRegionPanorama(array $args = [])
 * @method PaymentCryptographyClient createPaymentCryptography(array $args = [])
 * @method MultiRegionClient createMultiRegionPaymentCryptography(array $args = [])
 * @method PaymentCryptographyDataClient createPaymentCryptographyData(array $args = [])
 * @method MultiRegionClient createMultiRegionPaymentCryptographyData(array $args = [])
 * @method PcaConnectorAdClient createPcaConnectorAd(array $args = [])
 * @method MultiRegionClient createMultiRegionPcaConnectorAd(array $args = [])
 * @method PersonalizeClient createPersonalize(array $args = [])
 * @method MultiRegionClient createMultiRegionPersonalize(array $args = [])
 * @method PersonalizeEventsClient createPersonalizeEvents(array $args = [])
 * @method MultiRegionClient createMultiRegionPersonalizeEvents(array $args = [])
 * @method PersonalizeRuntimeClient createPersonalizeRuntime(array $args = [])
 * @method MultiRegionClient createMultiRegionPersonalizeRuntime(array $args = [])
 * @method PinpointClient createPinpoint(array $args = [])
 * @method MultiRegionClient createMultiRegionPinpoint(array $args = [])
 * @method PinpointEmailClient createPinpointEmail(array $args = [])
 * @method MultiRegionClient createMultiRegionPinpointEmail(array $args = [])
 * @method PinpointSMSVoiceClient createPinpointSMSVoice(array $args = [])
 * @method MultiRegionClient createMultiRegionPinpointSMSVoice(array $args = [])
 * @method PinpointSMSVoiceV2Client createPinpointSMSVoiceV2(array $args = [])
 * @method MultiRegionClient createMultiRegionPinpointSMSVoiceV2(array $args = [])
 * @method PipesClient createPipes(array $args = [])
 * @method MultiRegionClient createMultiRegionPipes(array $args = [])
 * @method PollyClient createPolly(array $args = [])
 * @method MultiRegionClient createMultiRegionPolly(array $args = [])
 * @method PricingClient createPricing(array $args = [])
 * @method MultiRegionClient createMultiRegionPricing(array $args = [])
 * @method PrivateNetworksClient createPrivateNetworks(array $args = [])
 * @method MultiRegionClient createMultiRegionPrivateNetworks(array $args = [])
 * @method PrometheusServiceClient createPrometheusService(array $args = [])
 * @method MultiRegionClient createMultiRegionPrometheusService(array $args = [])
 * @method ProtonClient createProton(array $args = [])
 * @method MultiRegionClient createMultiRegionProton(array $args = [])
 * @method QBusinessClient createQBusiness(array $args = [])
 * @method MultiRegionClient createMultiRegionQBusiness(array $args = [])
 * @method QConnectClient createQConnect(array $args = [])
 * @method MultiRegionClient createMultiRegionQConnect(array $args = [])
 * @method QLDBClient createQLDB(array $args = [])
 * @method MultiRegionClient createMultiRegionQLDB(array $args = [])
 * @method QLDBSessionClient createQLDBSession(array $args = [])
 * @method MultiRegionClient createMultiRegionQLDBSession(array $args = [])
 * @method QuickSightClient createQuickSight(array $args = [])
 * @method MultiRegionClient createMultiRegionQuickSight(array $args = [])
 * @method RAMClient createRAM(array $args = [])
 * @method MultiRegionClient createMultiRegionRAM(array $args = [])
 * @method RDSDataServiceClient createRDSDataService(array $args = [])
 * @method MultiRegionClient createMultiRegionRDSDataService(array $args = [])
 * @method RdsClient createRds(array $args = [])
 * @method MultiRegionClient createMultiRegionRds(array $args = [])
 * @method RecycleBinClient createRecycleBin(array $args = [])
 * @method MultiRegionClient createMultiRegionRecycleBin(array $args = [])
 * @method RedshiftClient createRedshift(array $args = [])
 * @method MultiRegionClient createMultiRegionRedshift(array $args = [])
 * @method RedshiftDataAPIServiceClient createRedshiftDataAPIService(array $args = [])
 * @method MultiRegionClient createMultiRegionRedshiftDataAPIService(array $args = [])
 * @method RedshiftServerlessClient createRedshiftServerless(array $args = [])
 * @method MultiRegionClient createMultiRegionRedshiftServerless(array $args = [])
 * @method RekognitionClient createRekognition(array $args = [])
 * @method MultiRegionClient createMultiRegionRekognition(array $args = [])
 * @method RepostspaceClient createRepostspace(array $args = [])
 * @method MultiRegionClient createMultiRegionRepostspace(array $args = [])
 * @method ResilienceHubClient createResilienceHub(array $args = [])
 * @method MultiRegionClient createMultiRegionResilienceHub(array $args = [])
 * @method ResourceExplorer2Client createResourceExplorer2(array $args = [])
 * @method MultiRegionClient createMultiRegionResourceExplorer2(array $args = [])
 * @method ResourceGroupsClient createResourceGroups(array $args = [])
 * @method MultiRegionClient createMultiRegionResourceGroups(array $args = [])
 * @method ResourceGroupsTaggingAPIClient createResourceGroupsTaggingAPI(array $args = [])
 * @method MultiRegionClient createMultiRegionResourceGroupsTaggingAPI(array $args = [])
 * @method RoboMakerClient createRoboMaker(array $args = [])
 * @method MultiRegionClient createMultiRegionRoboMaker(array $args = [])
 * @method RolesAnywhereClient createRolesAnywhere(array $args = [])
 * @method MultiRegionClient createMultiRegionRolesAnywhere(array $args = [])
 * @method Route53Client createRoute53(array $args = [])
 * @method MultiRegionClient createMultiRegionRoute53(array $args = [])
 * @method Route53DomainsClient createRoute53Domains(array $args = [])
 * @method MultiRegionClient createMultiRegionRoute53Domains(array $args = [])
 * @method Route53RecoveryClusterClient createRoute53RecoveryCluster(array $args = [])
 * @method MultiRegionClient createMultiRegionRoute53RecoveryCluster(array $args = [])
 * @method Route53RecoveryControlConfigClient createRoute53RecoveryControlConfig(array $args = [])
 * @method MultiRegionClient createMultiRegionRoute53RecoveryControlConfig(array $args = [])
 * @method Route53RecoveryReadinessClient createRoute53RecoveryReadiness(array $args = [])
 * @method MultiRegionClient createMultiRegionRoute53RecoveryReadiness(array $args = [])
 * @method Route53ResolverClient createRoute53Resolver(array $args = [])
 * @method MultiRegionClient createMultiRegionRoute53Resolver(array $args = [])
 * @method S3Client createS3(array $args = [])
 * @method S3MultiRegionClient createMultiRegionS3(array $args = [])
 * @method S3ControlClient createS3Control(array $args = [])
 * @method MultiRegionClient createMultiRegionS3Control(array $args = [])
 * @method S3OutpostsClient createS3Outposts(array $args = [])
 * @method MultiRegionClient createMultiRegionS3Outposts(array $args = [])
 * @method SSMContactsClient createSSMContacts(array $args = [])
 * @method MultiRegionClient createMultiRegionSSMContacts(array $args = [])
 * @method SSMIncidentsClient createSSMIncidents(array $args = [])
 * @method MultiRegionClient createMultiRegionSSMIncidents(array $args = [])
 * @method SSOClient createSSO(array $args = [])
 * @method MultiRegionClient createMultiRegionSSO(array $args = [])
 * @method SSOAdminClient createSSOAdmin(array $args = [])
 * @method MultiRegionClient createMultiRegionSSOAdmin(array $args = [])
 * @method SSOOIDCClient createSSOOIDC(array $args = [])
 * @method MultiRegionClient createMultiRegionSSOOIDC(array $args = [])
 * @method SageMakerClient createSageMaker(array $args = [])
 * @method MultiRegionClient createMultiRegionSageMaker(array $args = [])
 * @method SageMakerFeatureStoreRuntimeClient createSageMakerFeatureStoreRuntime(array $args = [])
 * @method MultiRegionClient createMultiRegionSageMakerFeatureStoreRuntime(array $args = [])
 * @method SageMakerGeospatialClient createSageMakerGeospatial(array $args = [])
 * @method MultiRegionClient createMultiRegionSageMakerGeospatial(array $args = [])
 * @method SageMakerMetricsClient createSageMakerMetrics(array $args = [])
 * @method MultiRegionClient createMultiRegionSageMakerMetrics(array $args = [])
 * @method SageMakerRuntimeClient createSageMakerRuntime(array $args = [])
 * @method MultiRegionClient createMultiRegionSageMakerRuntime(array $args = [])
 * @method SagemakerEdgeManagerClient createSagemakerEdgeManager(array $args = [])
 * @method MultiRegionClient createMultiRegionSagemakerEdgeManager(array $args = [])
 * @method SavingsPlansClient createSavingsPlans(array $args = [])
 * @method MultiRegionClient createMultiRegionSavingsPlans(array $args = [])
 * @method SchedulerClient createScheduler(array $args = [])
 * @method MultiRegionClient createMultiRegionScheduler(array $args = [])
 * @method SchemasClient createSchemas(array $args = [])
 * @method MultiRegionClient createMultiRegionSchemas(array $args = [])
 * @method SecretsManagerClient createSecretsManager(array $args = [])
 * @method MultiRegionClient createMultiRegionSecretsManager(array $args = [])
 * @method SecurityHubClient createSecurityHub(array $args = [])
 * @method MultiRegionClient createMultiRegionSecurityHub(array $args = [])
 * @method SecurityLakeClient createSecurityLake(array $args = [])
 * @method MultiRegionClient createMultiRegionSecurityLake(array $args = [])
 * @method ServerlessApplicationRepositoryClient createServerlessApplicationRepository(array $args = [])
 * @method MultiRegionClient createMultiRegionServerlessApplicationRepository(array $args = [])
 * @method ServiceCatalogClient createServiceCatalog(array $args = [])
 * @method MultiRegionClient createMultiRegionServiceCatalog(array $args = [])
 * @method ServiceDiscoveryClient createServiceDiscovery(array $args = [])
 * @method MultiRegionClient createMultiRegionServiceDiscovery(array $args = [])
 * @method ServiceQuotasClient createServiceQuotas(array $args = [])
 * @method MultiRegionClient createMultiRegionServiceQuotas(array $args = [])
 * @method SesClient createSes(array $args = [])
 * @method MultiRegionClient createMultiRegionSes(array $args = [])
 * @method SesV2Client createSesV2(array $args = [])
 * @method MultiRegionClient createMultiRegionSesV2(array $args = [])
 * @method SfnClient createSfn(array $args = [])
 * @method MultiRegionClient createMultiRegionSfn(array $args = [])
 * @method ShieldClient createShield(array $args = [])
 * @method MultiRegionClient createMultiRegionShield(array $args = [])
 * @method SimSpaceWeaverClient createSimSpaceWeaver(array $args = [])
 * @method MultiRegionClient createMultiRegionSimSpaceWeaver(array $args = [])
 * @method SmsClient createSms(array $args = [])
 * @method MultiRegionClient createMultiRegionSms(array $args = [])
 * @method SnowBallClient createSnowBall(array $args = [])
 * @method MultiRegionClient createMultiRegionSnowBall(array $args = [])
 * @method SnowDeviceManagementClient createSnowDeviceManagement(array $args = [])
 * @method MultiRegionClient createMultiRegionSnowDeviceManagement(array $args = [])
 * @method SnsClient createSns(array $args = [])
 * @method MultiRegionClient createMultiRegionSns(array $args = [])
 * @method SqsClient createSqs(array $args = [])
 * @method MultiRegionClient createMultiRegionSqs(array $args = [])
 * @method SsmClient createSsm(array $args = [])
 * @method MultiRegionClient createMultiRegionSsm(array $args = [])
 * @method SsmSapClient createSsmSap(array $args = [])
 * @method MultiRegionClient createMultiRegionSsmSap(array $args = [])
 * @method StorageGatewayClient createStorageGateway(array $args = [])
 * @method MultiRegionClient createMultiRegionStorageGateway(array $args = [])
 * @method StsClient createSts(array $args = [])
 * @method MultiRegionClient createMultiRegionSts(array $args = [])
 * @method SupplyChainClient createSupplyChain(array $args = [])
 * @method MultiRegionClient createMultiRegionSupplyChain(array $args = [])
 * @method SupportClient createSupport(array $args = [])
 * @method MultiRegionClient createMultiRegionSupport(array $args = [])
 * @method SupportAppClient createSupportApp(array $args = [])
 * @method MultiRegionClient createMultiRegionSupportApp(array $args = [])
 * @method SwfClient createSwf(array $args = [])
 * @method MultiRegionClient createMultiRegionSwf(array $args = [])
 * @method SyntheticsClient createSynthetics(array $args = [])
 * @method MultiRegionClient createMultiRegionSynthetics(array $args = [])
 * @method TextractClient createTextract(array $args = [])
 * @method MultiRegionClient createMultiRegionTextract(array $args = [])
 * @method TimestreamQueryClient createTimestreamQuery(array $args = [])
 * @method MultiRegionClient createMultiRegionTimestreamQuery(array $args = [])
 * @method TimestreamWriteClient createTimestreamWrite(array $args = [])
 * @method MultiRegionClient createMultiRegionTimestreamWrite(array $args = [])
 * @method TnbClient createTnb(array $args = [])
 * @method MultiRegionClient createMultiRegionTnb(array $args = [])
 * @method TranscribeServiceClient createTranscribeService(array $args = [])
 * @method MultiRegionClient createMultiRegionTranscribeService(array $args = [])
 * @method TransferClient createTransfer(array $args = [])
 * @method MultiRegionClient createMultiRegionTransfer(array $args = [])
 * @method TranslateClient createTranslate(array $args = [])
 * @method MultiRegionClient createMultiRegionTranslate(array $args = [])
 * @method TrustedAdvisorClient createTrustedAdvisor(array $args = [])
 * @method MultiRegionClient createMultiRegionTrustedAdvisor(array $args = [])
 * @method VPCLatticeClient createVPCLattice(array $args = [])
 * @method MultiRegionClient createMultiRegionVPCLattice(array $args = [])
 * @method VerifiedPermissionsClient createVerifiedPermissions(array $args = [])
 * @method MultiRegionClient createMultiRegionVerifiedPermissions(array $args = [])
 * @method VoiceIDClient createVoiceID(array $args = [])
 * @method MultiRegionClient createMultiRegionVoiceID(array $args = [])
 * @method WAFV2Client createWAFV2(array $args = [])
 * @method MultiRegionClient createMultiRegionWAFV2(array $args = [])
 * @method WafClient createWaf(array $args = [])
 * @method MultiRegionClient createMultiRegionWaf(array $args = [])
 * @method WafRegionalClient createWafRegional(array $args = [])
 * @method MultiRegionClient createMultiRegionWafRegional(array $args = [])
 * @method WellArchitectedClient createWellArchitected(array $args = [])
 * @method MultiRegionClient createMultiRegionWellArchitected(array $args = [])
 * @method WorkDocsClient createWorkDocs(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkDocs(array $args = [])
 * @method WorkLinkClient createWorkLink(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkLink(array $args = [])
 * @method WorkMailClient createWorkMail(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkMail(array $args = [])
 * @method WorkMailMessageFlowClient createWorkMailMessageFlow(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkMailMessageFlow(array $args = [])
 * @method WorkSpacesClient createWorkSpaces(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkSpaces(array $args = [])
 * @method WorkSpacesThinClientClient createWorkSpacesThinClient(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkSpacesThinClient(array $args = [])
 * @method WorkSpacesWebClient createWorkSpacesWeb(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkSpacesWeb(array $args = [])
 * @method XRayClient createXRay(array $args = [])
 * @method MultiRegionClient createMultiRegionXRay(array $args = [])
 * @method drsClient createdrs(array $args = [])
 * @method MultiRegionClient createMultiRegiondrs(array $args = [])
 * @method finspaceClient createfinspace(array $args = [])
 * @method MultiRegionClient createMultiRegionfinspace(array $args = [])
 * @method imagebuilderClient createimagebuilder(array $args = [])
 * @method MultiRegionClient createMultiRegionimagebuilder(array $args = [])
 * @method ivschatClient createivschat(array $args = [])
 * @method MultiRegionClient createMultiRegionivschat(array $args = [])
 * @method kendraClient createkendra(array $args = [])
 * @method MultiRegionClient createMultiRegionkendra(array $args = [])
 * @method mgnClient createmgn(array $args = [])
 * @method MultiRegionClient createMultiRegionmgn(array $args = [])
 * @method signerClient createsigner(array $args = [])
 * @method MultiRegionClient createMultiRegionsigner(array $args = [])
 */
class Sdk
{
    const VERSION = '3.300.14';

    /** @var array Arguments for creating clients */
    private $args;

    /**
     * Constructs a new SDK object with an associative array of default
     * client settings.
     *
     * @param array $args
     *
     * @throws InvalidArgumentException
     * @see Aws\AwsClient::__construct for a list of available options.
     */
    public function __construct(array $args = [])
    {
        $this->args = $args;

        if (!isset($args['handler']) && !isset($args['http_handler'])) {
            $this->args['http_handler'] = default_http_handler();
        }
    }

    public function __call($name, array $args)
    {
        $args = isset($args[0]) ? $args[0] : [];
        if (strpos($name, 'createMultiRegion') === 0) {
            return $this->createMultiRegionClient(substr($name, 17), $args);
        }

        if (strpos($name, 'create') === 0) {
            return $this->createClient(substr($name, 6), $args);
        }

        throw new BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Get a client by name using an array of constructor options.
     *
     * @param string $name Service name or namespace (e.g., DynamoDb, s3).
     * @param array  $args Arguments to configure the client.
     *
     * @return AwsClientInterface
     * @throws InvalidArgumentException if any required options are missing or
     *                                   the service is not supported.
     * @see Aws\AwsClient::__construct for a list of available options for args.
     */
    public function createClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        // Instantiate the client class.
        $client = "Aws\\{$namespace}\\{$namespace}Client";
        return new $client($this->mergeArgs($namespace, $service, $args));
    }

    public function createMultiRegionClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        $klass = "Aws\\{$namespace}\\{$namespace}MultiRegionClient";
        $klass = class_exists($klass) ? $klass : MultiRegionClient::class;

        return new $klass($this->mergeArgs($namespace, $service, $args));
    }

    /**
     * Clone existing SDK instance with ability to pass an associative array
     * of extra client settings.
     *
     * @param array $args
     *
     * @return self
     */
    public function copy(array $args = [])
    {
        return new self($args + $this->args);
    }

    private function mergeArgs($namespace, array $manifest, array $args = [])
    {
        // Merge provided args with stored, service-specific args.
        if (isset($this->args[$namespace])) {
            $args += $this->args[$namespace];
        }

        // Provide the endpoint prefix in the args.
        if (!isset($args['service'])) {
            $args['service'] = $manifest['endpoint'];
        }

        return $args + $this->args;
    }

    /**
     * Determine the endpoint prefix from a client namespace.
     *
     * @param string $name Namespace name
     *
     * @return string
     * @internal
     * @deprecated Use the `\Aws\manifest()` function instead.
     */
    public static function getEndpointPrefix($name)
    {
        return manifest($name)['endpoint'];
    }
}
