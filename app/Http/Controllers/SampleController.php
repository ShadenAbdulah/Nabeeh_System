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
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

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

//        return redirect()->route('object.test', ['test' => Test::first(), 'sample' => $sample]);
        return redirect()->route('object.train', ['test' => Test::first(), 'sample' => $sample]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
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
        }else{
            return view('server500');   
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
