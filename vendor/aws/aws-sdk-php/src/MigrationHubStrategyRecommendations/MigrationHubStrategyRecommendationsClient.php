<?php
namespace Aws\MigrationHubStrategyRecommendations;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Migration Hub Strategy Recommendations** service.
 * @method Result getApplicationComponentDetails(array $args = [])
 * @method Promise getApplicationComponentDetailsAsync(array $args = [])
 * @method Result getApplicationComponentStrategies(array $args = [])
 * @method Promise getApplicationComponentStrategiesAsync(array $args = [])
 * @method Result getAssessment(array $args = [])
 * @method Promise getAssessmentAsync(array $args = [])
 * @method Result getImportFileTask(array $args = [])
 * @method Promise getImportFileTaskAsync(array $args = [])
 * @method Result getLatestAssessmentId(array $args = [])
 * @method Promise getLatestAssessmentIdAsync(array $args = [])
 * @method Result getPortfolioPreferences(array $args = [])
 * @method Promise getPortfolioPreferencesAsync(array $args = [])
 * @method Result getPortfolioSummary(array $args = [])
 * @method Promise getPortfolioSummaryAsync(array $args = [])
 * @method Result getRecommendationReportDetails(array $args = [])
 * @method Promise getRecommendationReportDetailsAsync(array $args = [])
 * @method Result getServerDetails(array $args = [])
 * @method Promise getServerDetailsAsync(array $args = [])
 * @method Result getServerStrategies(array $args = [])
 * @method Promise getServerStrategiesAsync(array $args = [])
 * @method Result listAnalyzableServers(array $args = [])
 * @method Promise listAnalyzableServersAsync(array $args = [])
 * @method Result listApplicationComponents(array $args = [])
 * @method Promise listApplicationComponentsAsync(array $args = [])
 * @method Result listCollectors(array $args = [])
 * @method Promise listCollectorsAsync(array $args = [])
 * @method Result listImportFileTask(array $args = [])
 * @method Promise listImportFileTaskAsync(array $args = [])
 * @method Result listServers(array $args = [])
 * @method Promise listServersAsync(array $args = [])
 * @method Result putPortfolioPreferences(array $args = [])
 * @method Promise putPortfolioPreferencesAsync(array $args = [])
 * @method Result startAssessment(array $args = [])
 * @method Promise startAssessmentAsync(array $args = [])
 * @method Result startImportFileTask(array $args = [])
 * @method Promise startImportFileTaskAsync(array $args = [])
 * @method Result startRecommendationReportGeneration(array $args = [])
 * @method Promise startRecommendationReportGenerationAsync(array $args = [])
 * @method Result stopAssessment(array $args = [])
 * @method Promise stopAssessmentAsync(array $args = [])
 * @method Result updateApplicationComponentConfig(array $args = [])
 * @method Promise updateApplicationComponentConfigAsync(array $args = [])
 * @method Result updateServerConfig(array $args = [])
 * @method Promise updateServerConfigAsync(array $args = [])
 */
class MigrationHubStrategyRecommendationsClient extends AwsClient {}
