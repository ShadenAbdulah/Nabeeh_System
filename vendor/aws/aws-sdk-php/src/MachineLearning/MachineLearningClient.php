<?php
namespace Aws\MachineLearning;

use Aws\AwsClient;
use Aws\CommandInterface;
use Aws\Result;
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\RequestInterface;

/**
 * Amazon Machine Learning client.
 *
 * @method Result addTags(array $args = [])
 * @method Promise addTagsAsync(array $args = [])
 * @method Result createBatchPrediction(array $args = [])
 * @method Promise createBatchPredictionAsync(array $args = [])
 * @method Result createDataSourceFromRDS(array $args = [])
 * @method Promise createDataSourceFromRDSAsync(array $args = [])
 * @method Result createDataSourceFromRedshift(array $args = [])
 * @method Promise createDataSourceFromRedshiftAsync(array $args = [])
 * @method Result createDataSourceFromS3(array $args = [])
 * @method Promise createDataSourceFromS3Async(array $args = [])
 * @method Result createEvaluation(array $args = [])
 * @method Promise createEvaluationAsync(array $args = [])
 * @method Result createMLModel(array $args = [])
 * @method Promise createMLModelAsync(array $args = [])
 * @method Result createRealtimeEndpoint(array $args = [])
 * @method Promise createRealtimeEndpointAsync(array $args = [])
 * @method Result deleteBatchPrediction(array $args = [])
 * @method Promise deleteBatchPredictionAsync(array $args = [])
 * @method Result deleteDataSource(array $args = [])
 * @method Promise deleteDataSourceAsync(array $args = [])
 * @method Result deleteEvaluation(array $args = [])
 * @method Promise deleteEvaluationAsync(array $args = [])
 * @method Result deleteMLModel(array $args = [])
 * @method Promise deleteMLModelAsync(array $args = [])
 * @method Result deleteRealtimeEndpoint(array $args = [])
 * @method Promise deleteRealtimeEndpointAsync(array $args = [])
 * @method Result deleteTags(array $args = [])
 * @method Promise deleteTagsAsync(array $args = [])
 * @method Result describeBatchPredictions(array $args = [])
 * @method Promise describeBatchPredictionsAsync(array $args = [])
 * @method Result describeDataSources(array $args = [])
 * @method Promise describeDataSourcesAsync(array $args = [])
 * @method Result describeEvaluations(array $args = [])
 * @method Promise describeEvaluationsAsync(array $args = [])
 * @method Result describeMLModels(array $args = [])
 * @method Promise describeMLModelsAsync(array $args = [])
 * @method Result describeTags(array $args = [])
 * @method Promise describeTagsAsync(array $args = [])
 * @method Result getBatchPrediction(array $args = [])
 * @method Promise getBatchPredictionAsync(array $args = [])
 * @method Result getDataSource(array $args = [])
 * @method Promise getDataSourceAsync(array $args = [])
 * @method Result getEvaluation(array $args = [])
 * @method Promise getEvaluationAsync(array $args = [])
 * @method Result getMLModel(array $args = [])
 * @method Promise getMLModelAsync(array $args = [])
 * @method Result predict(array $args = [])
 * @method Promise predictAsync(array $args = [])
 * @method Result updateBatchPrediction(array $args = [])
 * @method Promise updateBatchPredictionAsync(array $args = [])
 * @method Result updateDataSource(array $args = [])
 * @method Promise updateDataSourceAsync(array $args = [])
 * @method Result updateEvaluation(array $args = [])
 * @method Promise updateEvaluationAsync(array $args = [])
 * @method Result updateMLModel(array $args = [])
 * @method Promise updateMLModelAsync(array $args = [])
 */
class MachineLearningClient extends AwsClient
{
    public function __construct(array $config)
    {
        parent::__construct($config);
        $list = $this->getHandlerList();
        $list->appendBuild($this->predictEndpoint(), 'ml.predict_endpoint');
    }

    /**
     * Changes the endpoint of the Predict operation to the provided endpoint.
     *
     * @return callable
     */
    private function predictEndpoint()
    {
        return static function (callable $handler) {
            return function (
                CommandInterface $command,
                RequestInterface $request = null
            ) use ($handler) {
                if ($command->getName() === 'Predict') {
                    $request = $request->withUri(new Uri($command['PredictEndpoint']));
                }
                return $handler($command, $request);
            };
        };
    }
}
