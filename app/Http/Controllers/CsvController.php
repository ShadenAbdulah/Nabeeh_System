<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CsvController extends Controller
{
    public function appendToS3(Request $request)
    {
        $this->appendToCsv($request);

        $id = $request->get('userID');

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
        $userFolderPath = 'system_users/' . $request->get('userID');

        if (!Storage::disk('local')->exists($userFolderPath)) {
            Storage::disk('local')->makeDirectory($userFolderPath);
        }

        $rawData = json_decode($request->input('rawData'), true);
        $filePath = 'system_users/' . $request->json('sessionName') . '.csv';

        if (!Storage::disk('local')->exists($filePath)) {
            $headers = [
                'ClientX', 'ClientY',
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
