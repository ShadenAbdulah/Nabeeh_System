<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
                'name' => 'required',
                'age' => 'required',
                'gender' => 'required',
                'type' => 'required',
                'another_disorder' => 'required_if:type,ADHD',
                'another_disorder_name' => 'required_if:another_disorder,yes',
                'supervisor_name' => 'required',
            ]);

        $attr['name'] = $request->input('name');

        $sample = Sample::create($attr);

        $userFolderPath = 'system_sample/' . $sample->id;

        if (!Storage::disk('s3')->exists($userFolderPath)) {
            Storage::disk('s3')->makeDirectory($userFolderPath);
        }

        return route('object.train', ['test' => Test::first(), 'sample' => $sample]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('object.create');
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
        dd($sample);
        return view('layouts.train', ['test' => Test::first(), 'sample' => $sample]);
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
