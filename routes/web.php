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
Route::get('/profile/ariel-sefrian', function () {
    return view('ariel-sefrian');
});

Route::get('/profile/devin-augustin', function () {
    return view('devin-augustin');
});

Route::get('/profile/rico-tokanto', function () {
    return view('devin-augustin');
});
