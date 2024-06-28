<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing-page.landing-page');
});

Route::get('/gen-key', function () {
    return view('gen-key');
})->name('gen-key.get');

Route::post('/gen-key', function (Request $request) {
    $hashedKey = hash('sha256', $request->key . SALT);
    return response()->json(['hashedKey' => $hashedKey]);
})->name('gen-key.post');

Route::get('aos', function () {
    return view('landing-page.test-aos');
});