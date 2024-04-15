<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class resultController extends Controller
{
    public function showResults(Request $request, $id)
    {
        session(['sampleID' => $id]);
        return view('result');
    }

    public function fetchResults()
    {
        try {
            sleep(5);

            $id = session()->get('sampleID');
//            Log::info('sampleID2222:', ['id' => $id]);

            $apiGatewayUrl = 'https://2yv3ea5spjpdmcig2tuzcepqsm0bajyb.lambda-url.us-east-1.on.aws/';
            $response = Http::timeout(200)->get($apiGatewayUrl, ['sampleID' => $id]);

            Log::info('Lambda response:', ['response' => $response->body()]);

            if ($response->successful()) {
                $responseBody = json_decode($response->body(), true);
                $probability = $responseBody[0] * 100;
                $result = $probability >= 50 ? 'ADHD' : 'Not ADHD';
                return response()->json(['result' => $result]);
            } else {
                Log::error('Error from API:', ['response' => $response->body()]);
                return response()->json(['error' => $response->body() ?? 'Failed to get a valid response from the API.'], 500);
            }

        } catch (Exception $e) {
            Log::error('Lambda execution failed: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
