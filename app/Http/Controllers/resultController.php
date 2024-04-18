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
        session(['userID' => $id]);
        return view('result');
    }

    public function fetchResults()
    {
        try {
            sleep(5);

            $id = session()->get('userID');
//            Log::info('sampleID2222:', ['id' => $id]);

            $apiGatewayUrl = 'https://2yv3ea5spjpdmcig2tuzcepqsm0bajyb.lambda-url.us-east-1.on.aws/';
            $response = Http::timeout(200)->get($apiGatewayUrl, ['userID' => $id]);

            Log::info('Lambda response:', ['response' => $response->body()]);

            if ($response->successful()) {
                $responseBody = json_decode($response->body(), true);
                $value = $responseBody[0];
                $prop = $responseBody[1];

                if ($prop >= 75) $value = 'extra.v_high';
                elseif ($prop < 75 and $prop >= 60) $value = 'extra.high';
                elseif ($prop < 60 and $prop >= 50) $value = 'extra.intermediate';
                elseif ($prop < 50 and $prop >= 25) $value = 'extra.low';
                elseif ($prop < 25 and $prop >= 0) $value = 'extra.v_low';

                return response()->json(['value' => $value, 'prop' => $prop]);
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
