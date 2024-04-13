<?php

use App\Http\Controllers\CsvController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\resultController;
use App\Http\Controllers\SampleController;
use App\Models\Sample;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//use Illuminate\Config;

Route::post('lang/{locale}', function (Request $request, $locale) {
//    $chosenLocale = $request->input('language');
    if (array_key_exists($locale, config('app.supported_locales'))) {
        session()->put('applocale', $locale);
    }
    return back();
})->name('lang');

// Login page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Login page
Route::get('/info', fn() => view('info'))->name('info');

//Route::get('/result', fn() => view('result'))->name('result');

// Route::get('/send', [resultController::class, 'store'])->name('result');
Route::get('/send', [resultController::class, 'showResults'])->name('result');
Route::get('/fetch-results', [resultController::class, 'fetchResults'])->name('fetch-results');


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


Route::get('/pdf', [PDFController::class, 'view'])->name('pdf');
