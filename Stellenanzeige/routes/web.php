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
    return view('welcome');
});


//CRUD

Route::get('Jobs' , function(){
    return view ('Jobs');
});

Route::post('store_data' , [App\Http\Controllers\JobController::class , 'store_data']);

Route::get('jobliste' , [App\Http\Controllers\JobController::class ,'jobliste']);

Route::get('delete_jobliste/{id}', [App\Http\Controllers\JobController::class ,'delete_jobliste']);

Route::get('edit_jobliste/{id}', [App\Http\Controllers\JobController::class ,'edit_jobliste']);

Route::post('update_data/{id}', [App\Http\Controllers\JobController::class ,'update_data']);
