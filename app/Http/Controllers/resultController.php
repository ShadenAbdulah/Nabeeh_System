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
        ini_set('max_execution_time', 700);
        ini_set('max_input_time', 700);
        ini_set('post_max_size', '128M');
    
        try {
            $id = session()->get('userID');
            Log::info('sampleID2222:', ['id' => $id]);
    
            $apiGatewayUrl = 'https://2yv3ea5spjpdmcig2tuzcepqsm0bajyb.lambda-url.us-east-1.on.aws/';
            $response = Http::get($apiGatewayUrl, ['userID' => $id]);
    
            if ($response->successful()) {
                $responseBody = json_decode($response->body(), true);
                $value = $responseBody[0];
                $prop = $responseBody[1];
    
                if ($prop >= 75) $value = 'مرتفعة جدًا';
                elseif ($prop < 75 && $prop >= 60) $value = 'مرتفعة';
                elseif ($prop < 60 && $prop >= 50) $value = 'متوسطة';
                elseif ($prop < 50 && $prop >= 25) $value = 'منخفضة';
                elseif ($prop < 25 && $prop >= 0) $value = 'منخفضة جدًا';
    
                return response()->json(['value' => $value, 'prop' => $prop, 'complete' => true]);
            } else {
                $errorResponse = json_decode($response->body(), true);
                Log::error('Error from API:', ['response' => $response->body()]);
                return response()->json(['EError' => $errorResponse ?? 'Failed to get a valid response from the API.'], 500);
            }
    
        } catch (Exception $e) {
            Log::error('Lambda execution failed: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to fetch results.'], 500);
        }
    }
}

