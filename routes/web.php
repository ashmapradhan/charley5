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
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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




