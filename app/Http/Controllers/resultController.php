<?php

namespace App\Http\Controllers;

use App\Models\Test;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

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
        $response = $client->$request('POST', 'http://python-server-address:5000/predict', [
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($filePath, 'r')
                ],
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
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
