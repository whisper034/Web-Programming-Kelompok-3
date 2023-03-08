<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME
Route::get('/', function () {
    return view('home');
});

// PROFILE ROUTES
Route::get('/profiles/ariel-sefrian', function () {
    return view('profiles/ariel-sefrian');
});

Route::get('/profiles/devin-augustin', function () {
    return view('profiles/devin-augustin');
});

Route::get('/profiles/rico-tokanto', function () {
    return view('profiles/rico-tokanto');
});
