<?php

use App\Http\Controllers\SampleController;
use App\Models\Sample;
use App\Models\Test;
use App\Http\Controllers\CsvController;
use Illuminate\Support\Facades\Route;

// Login page
Route::get('/', function () {
    return view('welcome');
});

// Create and store new object
Route::get('/object', [SampleController::class, 'create'])->name('object.create');
Route::post('/object', [SampleController::class, 'store'])->name('object.store');

// Start train
Route::get('/object/train/{sample}', [SampleController::class, 'edit'])->name('object.train');

// Test
Route::get('/{test}/{sample}', function (Test $test, Sample $sample) {
    return view('layouts.test', ['test' => $test, 'sample' => $sample]);
})->name('object.test');

// Append to CSV
Route::post('/append-to-csv', [CsvController::class, 'appendToCsv']);
