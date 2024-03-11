<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Redirect;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('object.create');
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

<<<<<<< HEAD
        $attr['name'] = ($request->input('name')) ? $request->input('name') : null;

=======
>>>>>>> parent of c8b1139b (update Ui)
        $sample = Sample::create($attr);

        $userFolderPath = 'samples_folders/' . $sample->id;

        if (!Storage::disk('s3')->exists($userFolderPath)) {
            Storage::disk('s3')->makeDirectory($userFolderPath);
        }

        return Redirect::route('object.train', ['test' => Test::first(), 'sample' => $sample]);
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
        return view('train', ['test' => Test::first(), 'sample' => $sample]);
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
