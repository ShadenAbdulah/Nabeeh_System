<?php
namespace Aws\Polly;

use Aws\Api\Serializer\JsonBody;
use Aws\AwsClient;
use Aws\Result;
use Aws\Signature\SignatureV4;
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Psr7;

/**
 * This client is used to interact with the **Amazon Polly** service.
 * @method Result deleteLexicon(array $args = [])
 * @method Promise deleteLexiconAsync(array $args = [])
 * @method Result describeVoices(array $args = [])
 * @method Promise describeVoicesAsync(array $args = [])
 * @method Result getLexicon(array $args = [])
 * @method Promise getLexiconAsync(array $args = [])
 * @method Result getSpeechSynthesisTask(array $args = [])
 * @method Promise getSpeechSynthesisTaskAsync(array $args = [])
 * @method Result listLexicons(array $args = [])
 * @method Promise listLexiconsAsync(array $args = [])
 * @method Result listSpeechSynthesisTasks(array $args = [])
 * @method Promise listSpeechSynthesisTasksAsync(array $args = [])
 * @method Result putLexicon(array $args = [])
 * @method Promise putLexiconAsync(array $args = [])
 * @method Result startSpeechSynthesisTask(array $args = [])
 * @method Promise startSpeechSynthesisTaskAsync(array $args = [])
 * @method Result synthesizeSpeech(array $args = [])
 * @method Promise synthesizeSpeechAsync(array $args = [])
 */
class PollyClient extends AwsClient
{
    /** @var JsonBody */
    private $formatter;

    /**
     * Create a pre-signed URL for Polly operation `SynthesizeSpeech`
     *
     * @param array $args parameters array for `SynthesizeSpeech`
     *                    More information @see Aws\Polly\PollyClient::SynthesizeSpeech
     *
     * @return string
     */
    public function createSynthesizeSpeechPreSignedUrl(array $args)
    {
        $uri = new Uri($this->getEndpoint());
        $uri = $uri->withPath('/v1/speech');

        // Formatting parameters follows rest-json protocol
        $this->formatter = $this->formatter ?: new JsonBody($this->getApi());
        $queryArray = json_decode(
            $this->formatter->build(
                $this->getApi()->getOperation('SynthesizeSpeech')->getInput(),
                $args
            ),
            true
        );

        // Mocking a 'GET' request in pre-signing the Url
        $query = Psr7\Query::build($queryArray);
        $uri = $uri->withQuery($query);

        $request = new Request('GET', $uri);
        $request = $request->withBody(Psr7\Utils::streamFor(''));
        $signer = new SignatureV4('polly', $this->getRegion());
        return (string) $signer->presign(
            $request,
            $this->getCredentials()->wait(),
            '+15 minutes'
        )->getUri();
    }
}
