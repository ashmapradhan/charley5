<?php

use Illuminate\Auth\Middleware\Authenticate;
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

Route::get('/', function () {
    return view('auth/login');
});


/* Route::get('/home', function () {
    dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth', 'verified']); */

Route::get('/home', function () {
    dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth', 'verified']);

//these 2 sections worked but how? how does it know to go to which one first? 

Route::get('/homev2', function () {
    return view('welcome');
});