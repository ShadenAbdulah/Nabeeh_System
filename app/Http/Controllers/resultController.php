<?php

namespace App\Http\Controllers;

use App\Models\Test;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class resultController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @throws GuzzleException
     */

// public function store(Request $request)
// {
//     // Log the incoming request data (useful for debugging)
//     Log::debug('Request data: ', ['data' => $request->all()]);

//     // Define your paths and command
//     $pythonPath = 'C:\Python311\python.exe';
//     $scriptPath = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\files\app.py';
//     // $csvFilePath = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\public\Pl_Non.csv';
//     $csvFilePath = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\public\Pl_ADHD.csv';
//     $ModelPath = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\files\svm_model.joblib';

//     $command = [$pythonPath, $scriptPath, $csvFilePath, $ModelPath];

//     // Log the command to be executed
//     Log::info('Executing command: ' . implode(' ', $command));

//     try {
//         // Execute the command
//         $process = new Process($command);
//         $process->run();

//         // Check if the process is successful
//         if (!$process->isSuccessful()) {
//             // Log the error
//             Log::error('Process failed: ' . $process->getErrorOutput());
//             throw new ProcessFailedException($process);
//         }

//         // Process is successful, log this event
//         Log::info('Process succeeded.');

//         // Decode the output to an associative array
//         $result = json_decode($process->getOutput(), true);

//         // Log the output for debugging
//         // Log the output for debugging
//         Log::debug('Process output: ', is_array($result) ? $result : ['result' => $result]);

//         return view('result', ['result' => $result]);
//     } catch (\Exception $e) {
//         // Catch any exception and log it
//         Log::error('An error occurred: ' . $e->getMessage());
//         // Optionally, return a response or view with an error message
//         return response()->json(['error' => 'An unexpected error occurred.'], 500);
//     }
// }
public function store(Request $request)
{
    // Log the incoming request data (useful for debugging)
    Log::debug('Request data: ', ['data' => $request->all()]);

    // Define your paths and command

    // $ZL_trace_1 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\1-ZL_trace.csv';
    // $ZL_trace_2 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\3-ZL_trace.csv';
    // $ZL_trace_3 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\5-ZL_trace.csv';

    // $ZL_predict_1 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\2-ZL_predict.csv';
    // $ZL_predict_2 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\4-ZL_predict.csv';
    // $ZL_predict_3 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\6-ZL_predict.csv';

    // $PL_trace_1 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\7-PL_trace.csv';
    // $PL_trace_2 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\9-PL_trace.csv';
    // $PL_trace_3 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\11-PL_trace.csv';

    // $PL_predict_1 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\8-PL_predict.csv';
    // $PL_predict_2 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\10-PL_predict.csv';
    // $PL_predict_3 = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1\12-PL_predict.csv';

    // u need to change the path with FULL path 
    $pythonPath = 'C:\Python311\python.exe';
    $scriptPath = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\files\app.py';
    $filesPath = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\storage\app\system_users\1';
    $ModelPath = 'C:\Users\eanha\Documents\collage\GP_Phase2\Nabeeh_System\files\svm_model.joblib';

    $command = [$pythonPath, $scriptPath, $filesPath, $ModelPath];

    // Log the command to be executed
    Log::info('Executing command: ' . implode(' ', $command));

    try {
        // Execute the command
        $process = new Process($command);
        $process->run();

        // Check if the process is successful
        if (!$process->isSuccessful()) {
            // Log the error
            Log::error('Process failed: ' . $process->getErrorOutput());
            $errorOutput = $process->getErrorOutput();
            Log::debug('Process error output: ', ['error' => $errorOutput]);

            throw new ProcessFailedException($process);
        }

        // Process is successful, log this event
        Log::info('Process succeeded.');

        // Decode the output to an associative array
        $result = json_decode($process->getOutput(), true);

        // Log the output for debugging
        // Log the output for debugging
        Log::debug('Process output: ', is_array($result) ? $result : ['result' => $result]);

        return view('result', ['result' => $result]);
    } catch (\Exception $e) {
        // Catch any exception and log it
        Log::error('An error occurred: ' . $e->getMessage());
        // Optionally, return a response or view with an error message
        return response()->json(['error' => 'An unexpected error occurred.'], 500);
    }
}

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
