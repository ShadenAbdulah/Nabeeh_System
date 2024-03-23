<?php

namespace App\Http\Controllers;

use App\Models\Test;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
     */
    public function store(Request $request)
    {
        $filePath = 'storage/app/public/Pl_ADHD.csv';
        $client = new Client();
        $response = $client->request('POST', 'http://54.158.32.28/predict', [
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($filePath, 'r')
                ],
            ]
        ]);
    
        // Convert the response body to a string and log it
        $responseBody = $response->getBody()->getContents();
        Log::info($responseBody);
    
        $result = json_decode($responseBody, true);
    
        return view('layouts.result', ['result' => $result]);
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
