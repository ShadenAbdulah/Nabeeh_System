<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CsvController extends Controller
{
    public function appendToS3(Request $request)
    {
        $this->appendToCsv($request);
        $userFolderPath = 'samples_folders/' . $request->get('sampleID');

        // Get all files within the local folder
        $files = Storage::disk('local')->allFiles($userFolderPath);

        foreach ($files as $filePath) {
            // Read the file content
            $fileContent = Storage::disk('local')->get($filePath);

            // Upload file to S3
            Storage::disk('s3')->put($filePath, $fileContent);
        }

        Storage::disk('local')->deleteDirectory('samples_folders');


        return response()->json(['message' => 'Files uploaded to S3 successfully.']);
    }

    public function appendToCsv(Request $request)
    {
        $userFolderPath = 'samples_folders/' . $request->get('sampleID');

        if (!Storage::disk('local')->exists($userFolderPath)) {
            Storage::disk('local')->makeDirectory($userFolderPath);
        }

        $rawData = json_decode($request->input('rawData'), true);
        $filePath = 'samples_folders/' . $request->json('sessionName') . '.csv';

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
