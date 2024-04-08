<?php

namespace App\Http\Controllers;


use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;


class CsvController extends Controller
{
    public function appendToS3(Request $request)
    {
        $this->appendToCsv($request);

        // $id = $request->get('sampleID');
        $id = 2;
        // preproccesing
        try {

            $pythonPath = 'python3';
            $scriptPath = '/home/u894522242/public_html/system/files/app.py';
            $command = [$pythonPath, $scriptPath, $id];
            $process = new Process($command);
            $process->run();

            if (!$process->isSuccessful()) {
                // Log the error
                Log::error('Process failed: ' . $process->getErrorOutput());
                $errorOutput = $process->getErrorOutput();
                Log::debug('Process error output: ', ['error' => $errorOutput]);

                throw new ProcessFailedException($process);
            }

            // Process is successful, log this event
            Log::info('Process succeeded.');
        } catch (Exception $e) {
            // Catch any exception and log it
            Log::error('An error occurred: ' . $e->getMessage());
            // Optionally, return a response or view with an error message
            return response()->json(['error' => 'An unexpected error occurred.'], 500);
        }


        // $userFolderPath = 'system_users/' . $request->get('sampleID');
        $userFolderPath = 'system_users/' . $id;
        // Get all files within the local folder
        $files = Storage::disk('local')->allFiles($userFolderPath);

        foreach ($files as $filePath) {
            // Read the file content
            $fileContent = Storage::disk('local')->get($filePath);

            // Upload file to S3
            Storage::disk('s3')->put($filePath, $fileContent);
        }

        Storage::disk('local')->deleteDirectory('system_users');


        return response()->json(['message' => 'Files uploaded to S3 successfully.']);
    }

    public function appendToCsv(Request $request)
    {
        $userFolderPath = 'system_users/' . $request->get('sampleID');

        if (!Storage::disk('local')->exists($userFolderPath)) {
            Storage::disk('local')->makeDirectory($userFolderPath);
        }

        $rawData = json_decode($request->input('rawData'), true);
        $filePath = 'system_users/' . $request->json('sessionName') . '.csv';

        if (!Storage::disk('local')->exists($filePath)) {
            $headers = [
                'ClientX', 'ClientY',
                'altitudeAngle', 'azimuthAngle',
                'TiltX', 'TiltY',
                'Pressure',
                'timestamp',
                'StrokeDuration'
            ];

            $headerRow = implode(',', $headers);
            Storage::disk('local')->put($filePath, $headerRow);
        }

        foreach ($rawData as $row) {
            $csvData = implode(',', $row);
            Storage::disk('local')->append($filePath, $csvData);
        }

        return response()->json();
    }
}
