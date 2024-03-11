<?php
namespace Aws\CodeGuruReviewer;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon CodeGuru Reviewer** service.
 * @method Result associateRepository(array $args = [])
 * @method Promise associateRepositoryAsync(array $args = [])
 * @method Result createCodeReview(array $args = [])
 * @method Promise createCodeReviewAsync(array $args = [])
 * @method Result describeCodeReview(array $args = [])
 * @method Promise describeCodeReviewAsync(array $args = [])
 * @method Result describeRecommendationFeedback(array $args = [])
 * @method Promise describeRecommendationFeedbackAsync(array $args = [])
 * @method Result describeRepositoryAssociation(array $args = [])
 * @method Promise describeRepositoryAssociationAsync(array $args = [])
 * @method Result disassociateRepository(array $args = [])
 * @method Promise disassociateRepositoryAsync(array $args = [])
 * @method Result listCodeReviews(array $args = [])
 * @method Promise listCodeReviewsAsync(array $args = [])
 * @method Result listRecommendationFeedback(array $args = [])
 * @method Promise listRecommendationFeedbackAsync(array $args = [])
 * @method Result listRecommendations(array $args = [])
 * @method Promise listRecommendationsAsync(array $args = [])
 * @method Result listRepositoryAssociations(array $args = [])
 * @method Promise listRepositoryAssociationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putRecommendationFeedback(array $args = [])
 * @method Promise putRecommendationFeedbackAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 */
class CodeGuruReviewerClient extends AwsClient {}
