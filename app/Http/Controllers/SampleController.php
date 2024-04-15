<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SampleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attr =
            request()->validate([
                'age' => 'required|integer',
                'gender' => 'required',
            ]);

        $attr['name'] = ($request->input('name')) ? $request->input('name') : null;

        $sample = Sample::create($attr);

        return redirect()->route('object.train', ['test' => Test::first(), 'sample' => $sample]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sample $sample)
    {
        $apiGatewayUrl = 'https://hboras4vfn2de5azruvc2kdwem0ovckc.lambda-url.us-east-1.on.aws/';
        $response = Http::timeout(20)->get($apiGatewayUrl);
        Log::info('Lambda serverFun response:', ['response' => $response->body()]);

        if ($response->successful()) {
            return view('layouts.train', ['test' => Test::first(), 'sample' => $sample]);
        } else {
            return view('server500');
        }
    }
}
