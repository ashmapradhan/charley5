<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\GetController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SubscriberController;


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

Route::post('/subscribe', [SubscriberController::class, 'subscribe']);

Route::get('/', function () {
    return view('auth/login');
});


Route::resource('/employee',EmployeeController::class);

Route::get('/employee/search','EmployeeController@search');


/* Route::get('/home', function () {
    dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth', 'verified']); */

Route::get('/home', function () {
    return view('welcome');
    //dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth', 'verified']);

//these 2 sections worked but how? how does it know to go to which one first? 

Route::get('/homev2', 'GetController@welcomeGet', function () {
    return view('welcome');
});