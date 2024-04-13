<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class resultController extends Controller
{
    public function showResults(Request $request)
    {
        $id = $request->get('sampleID');
//        $id = 2;

        session(['sampleID' => (int)$id]);
        return view('result');
    }

    public function fetchResults()
    {
        try {
            $id = session('sampleID');
            $apiGatewayUrl = 'https://2yv3ea5spjpdmcig2tuzcepqsm0bajyb.lambda-url.us-east-1.on.aws/';
            $response = Http::timeout(150)->get($apiGatewayUrl, ['sampleID' => $id]);
            Log::info('Lambda response:', ['response' => $response->body()]);
            if ($response->successful()) {
                $responseBody = json_decode($response->body(), true);
                $probability = $responseBody[0] * 100;
                $result = $probability >= 50 ? 'ADHD' : 'Not ADHD';
                return response()->json(['result' => $result, 'probability' => $probability]);
            } else {
                return response()->json(['error' => 'Failed to get a valid response from the API.'], 500);
            }

        } catch (Exception $e) {
            Log::error('Lambda execution failed: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to execute prediction model.'], 500);
        }
    }

    // public function store(Request $request)
    // {
    //     // $id = $request->get('sampleID');
    //     $id = 2;
    //     // sleep(5); // Pause PHP execution for 5 seconds

    //     try {
    //         $apiGatewayUrl = 'https://2yv3ea5spjpdmcig2tuzcepqsm0bajyb.lambda-url.us-east-1.on.aws/';
    //         $response = Http::timeout(150)->get($apiGatewayUrl, ['sampleID' => $id]);

    //         // Log the raw response for debugging
    //         Log::info('Lambda response:', ['response' => $response->body()]);

    //         $responseBody = json_decode($response->body(), true);

    //         $probability = $responseBody[0]; // Correctly accessing the first element of the array

    //         // Continue with your logic...
    //         $result = 'Not ADHD'; // Default to 'Not ADHD'
    //         if ($probability >= 0.50) {
    //             $result = 'ADHD';
    //         }
    //         $probability *= 100;

    //         // Pass the result to your view
    //         return view('result', ['result' => $result, 'probability' => $probability]);

    //     } catch (Exception $e) {
    //         Log::error('Lambda execution failed: ' . $e->getMessage());

    //         // ERROR PAGE
    //         return response()->json(['error' => 'Failed to execute prediction model.'], 500);
    //     }


    // }

//     public function store(Request $request)
//     {

// // ...inside your store function after files are uploaded to S3

// // Initialize the Lambda client
//         $lambdaClient = new LambdaClient([
//             'version' => 'latest',
//             'region' => config('filesystems.disks.s3.region')
//         ]);

// // Prepare the payload with file paths or any other needed parameters
//         $payload = json_encode([
//             // For example, send the S3 bucket name and file keys
//             'bucket' => 'nabeeh',
//             'files' => [
//                 'system_users/' . $request->get('sampleID'),
//             ],
//         ]);

//         try {
//             $result = $lambdaClient->invoke([
//                 'FunctionName' => 'your-lambda-function-name',
//                 'Payload' => $payload,
//             ]);

//             // Decode the output from the Lambda function
//             $lambdaOutput = json_decode($result->get('Payload')->getContents(), true);

//             Log::info('Lambda function executed successfully.', ['result' => $lambdaOutput]);

//             // Assuming your Lambda function returns the prediction results
//             // You can now return these results to the view or as a JSON response
//             return view('result', ['result' => $lambdaOutput]);
//         } catch (Exception $e) {
//             Log::error('Lambda execution failed: ' . $e->getMessage());
//             return response()->json(['error' => 'Failed to execute prediction model.'], 500);
//         }

//     }

//    public function store(Request $request)
//    {
//        // Log the incoming request data (useful for debugging)
//        Log::debug('Request data: ', ['data' => $request->all()]);
//
//        // Define your paths and command
//
//        // $ZL_trace_1 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\1-ZL_trace.csv';
//        // $ZL_trace_2 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\3-ZL_trace.csv';
//        // $ZL_trace_3 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\5-ZL_trace.csv';
//
//        // $ZL_predict_1 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\2-ZL_predict.csv';
//        // $ZL_predict_2 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\4-ZL_predict.csv';
//        // $ZL_predict_3 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\6-ZL_predict.csv';
//
//        // $PL_trace_1 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\7-PL_trace.csv';
//        // $PL_trace_2 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\9-PL_trace.csv';
//        // $PL_trace_3 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\11-PL_trace.csv';
//
//        // $PL_predict_1 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\8-PL_predict.csv';
//        // $PL_predict_2 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\10-PL_predict.csv';
//        // $PL_predict_3 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\12-PL_predict.csv';
//
//        // u need to change the path with FULL path
////        $pythonPath = 'C:\Python311\python.exe'; //windows
//        $pythonPath = './opt/homebrew/bin/python3'; //mac
////        $scriptPath = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\files\app.py';
//        $scriptPath = '/Users/shaden/Desktop/nabeeh_system/files/app.py';
////        $filesPath = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1';
//        $filesPath = '/Users/shaden/Desktop/nabeeh_system/storage/app/system_users/1';
////        $ModelPath = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\files\svm_model.joblib';
//        $ModelPath = '/Users/shaden/Desktop/nabeeh_system/files/svm_model.joblib';
//   C:\Python311\python.exe  C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\files\app.py C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1
//        $command = [$pythonPath, $scriptPath, $filesPath, $ModelPath];
//
//        // Log the command to be executed
//        Log::info('Executing command: ' . implode(' ', $command));
//
    //    try {
    //        // Execute the command
    //        $process = new Process($command);
    //        $process->run();

    //        // Check if the process is successful
    //        if (!$process->isSuccessful()) {
    //            // Log the error
    //            Log::error('Process failed: ' . $process->getErrorOutput());
    //            $errorOutput = $process->getErrorOutput();
    //            Log::debug('Process error output: ', ['error' => $errorOutput]);

    //            throw new ProcessFailedException($process);
    //        }

    //        // Process is successful, log this event
    //        Log::info('Process succeeded.');

    //        // Decode the output to an associative array
    //        $result = json_decode($process->getOutput(), true);

    //        // Log the output for debugging
    //        // Log the output for debugging
    //        Log::debug('Process output: ', is_array($result) ? $result : ['result' => $result]);

    //        return view('result', ['result' => $result]);
    //    } catch (Exception $e) {
    //        // Catch any exception and log it
    //        Log::error('An error occurred: ' . $e->getMessage());
    //        // Optionally, return a response or view with an error message
    //        return response()->json(['error' => 'An unexpected error occurred.'], 500);
    //    }
//    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}
