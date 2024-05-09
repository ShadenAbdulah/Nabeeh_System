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
            $id = session()->get('userID');
            Log::info('sampleID2222:', ['id' => $id]);

            $apiGatewayUrl = 'https://2yv3ea5spjpdmcig2tuzcepqsm0bajyb.lambda-url.us-east-1.on.aws/';
            $response = Http::timeout(700)->get($apiGatewayUrl, ['userID' => $id]);
            Log::info('Lambda response:', ['response' => $response->body()]);

            if ($response->successful()) {
                $responseBody = json_decode($response->body(), true);
                $prop = $responseBody[0];
            
                if ($prop == 100) $value = 'الإحتمالية مؤكدة';
                elseif ($prop <= 99 && $prop >= 81) $value = 'مرتفعة جدًا';
                elseif ($prop <= 80 && $prop >= 61) $value = 'مرتفعة';
                elseif ($prop <= 60 && $prop >= 41) $value = 'متوسطة';
                elseif ($prop <= 40 && $prop >= 21) $value = 'منخفضة';
                elseif ($prop <= 20 && $prop >= 1) $value = 'منخفضة جدًا';
                elseif ($prop == 0) $value = 'الإحتمالية معدومة';
    
                return response()->json(['value' => $value, 'prop' => $prop]);
            } else {
                $errorResponse = json_decode($response->body(), true);
                Log::error('Error from API:', ['response' => $response->body()]);
                return response()->json(['error' => $errorResponse ?? 'Failed to get a valid response from the API.'], 500);
            }

        } catch (Exception $e) {
            Log::error('Lambda execution failed: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to fetch results.'], 500);
        }
    }

}

