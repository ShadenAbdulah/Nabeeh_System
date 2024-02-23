<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CsvController extends Controller
{
    public function appendToCsv(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

        $rawData = json_decode($request->input('rawData'), true);
        // $rowData = $request->input('rawData');
        Log::info('PHP: ' . count($rawData));
        $filePath = 'samples_folders/' . $request->json('sessionName') . '.csv';

        if (!Storage::disk('local')->exists($filePath)) {
//        if (!Storage::disk('s3')->exists($filePath)) {
            $headers = [
                'ClientX', 'ClientY',
                'Instantaneous_Velocity',
                'acceleration',
                'altitudeAngle', 'azimuthAngle',
                'TiltX', 'TiltY',
                'Pressure',
                'TimeSec', 'timestamp'
            ];
            $headerRow = implode(',', $headers);
            Storage::disk('local')->put($filePath, $headerRow);
//            Storage::disk('s3')->put($filePath, $headerRow);
        }

        foreach ($rawData as $row) {
            $csvData = implode(',', $row);
            Storage::disk('local')->append($filePath, $csvData);
//            Storage::disk('s3')->append($filePath, $csvData);
        }


        Storage::disk('s3')->put($filePath, Storage::disk('local')->get($filePath));

        return response()->json();
    }
}
