<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\GetController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/workRequest', 'GetController@emplData');

Route::post('/workRequest', 'GetController@emplData');

Route::get('/currentJobs', 'GetController@curWrk');

Route::post('/currentJobs', 'GetController@curWrk');

Route::get('insert', 'PostsController@insertform');

Route::post('create', 'PostsController@insert');

Route::post('edit', 'PostsController@edit');

Route::post('/dashboard', 'PostsController@home');


Route::get('/home', function () {
    dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth', 'verified']);
