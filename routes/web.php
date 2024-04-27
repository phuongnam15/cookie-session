<?php

use Illuminate\Support\Facades\Route;
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
    Session::put('language', 'english');
    logger(session()->all());
    return view('welcome');
});
Route::get('/home', function () {
    logger(session()->all());
    return response()->json(['language' => session('language')]);
});

Route::get('/session/get', function() {
    logger(session()->all());
    return response()->json(['language' => session('language')]);
});