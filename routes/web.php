<?php

use App\Http\Controllers\CsvController;
use App\Http\Controllers\resultController;
use App\Http\Controllers\SampleController;
use App\Models\Sample;
use App\Models\Test;
use Illuminate\Support\Facades\Route;

// Login page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Login page
Route::get('/info', fn() => view('info'))->name('info');

//Route::get('/result', fn() => view('result'))->name('result');

Route::post('/send', [resultController::class, 'store'])->name('result');

// Create and store new user
Route::post('/create', [SampleController::class, 'store'])->name('object.store');

// Start train
Route::get('/object/train/{sample}', [SampleController::class, 'edit'])->name('object.train');

// Test
Route::get('/{test}/{sample}', function (Test $test, Sample $sample) {
    return view('layouts.test', ['test' => $test, 'sample' => $sample]);
})->name('object.test');

// Append to CSV
Route::post('/append-to-csv', [CsvController::class, 'appendToCsv']);

// Append to S3
Route::post('/append-to-s3', [CsvController::class, 'appendToS3']);
