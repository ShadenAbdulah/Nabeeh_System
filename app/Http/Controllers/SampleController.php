<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use App\Models\Test;
use Illuminate\Http\Request;

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
