<?php

use App\Http\Controllers\CsvController;
use App\Http\Controllers\resultController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//use Illuminate\Config;

Route::get('lang/{locale}', function (Request $request, $locale) {
//    $chosenLocale = $request->input('language');
    if (array_key_exists($locale, config('app.supported_locales'))) {
        session()->put('applocale', $locale);
    }
    return back()->with('lang', session()->get('applocale'));
})->name('lang');

// Login page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/send/{id}', [resultController::class, 'showResults'])->name('result');
Route::get('/fetch-results', [resultController::class, 'fetchResults'])->name('fetch-results');
Route::post('/sendHttp', [resultController::class, 'sendHttp'])->name('sendHttp');


// Create and store new user
Route::post('/store', [UserController::class, 'store'])->name('user.store');

// Start train
Route::get('/train/{user}', [UserController::class, 'edit'])->name('user.train');

Route::get('/{test}/{user}', [TestController::class, 'index'])->name('user.test');

// Append to CSV
Route::post('/append-to-csv', [CsvController::class, 'appendToCsv']);

// Append to S3
Route::post('/append-to-s3', [CsvController::class, 'appendToS3']);
