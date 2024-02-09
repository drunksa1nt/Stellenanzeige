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


//JOBS
Route::get('jobs' , function(){
    return view ('jobs');
});

Route::post('store_jobs' , [App\Http\Controllers\JobController::class , 'store_jobs']);

Route::get('jobliste' , [App\Http\Controllers\JobController::class ,'jobliste']);

Route::get('delete_jobliste/{id}', [App\Http\Controllers\JobController::class ,'delete_jobliste']);

Route::get('edit_jobliste/{id}', [App\Http\Controllers\JobController::class ,'edit_jobliste']);

Route::post('update_jobs/{id}', [App\Http\Controllers\JobController::class ,'update_jobs']);
//JOBS\\
//Category
Route::get('category' , function(){
    return view ('category');
});
Route::post('store_category' , [App\Http\Controllers\CategoryController::class , 'store_category']);

Route::get('categoryliste' , [App\Http\Controllers\CategoryController::class ,'categoryliste']);

Route::get('delete_categoryliste/{id}', [App\Http\Controllers\CategoryController::class ,'delete_categoryliste']);

Route::get('edit_categoryliste/{id}', [App\Http\Controllers\CategoryController::class ,'edit_categoryliste']);

Route::post('update_category/{id}', [App\Http\Controllers\CategoryController::class ,'update_category']);

//Category\\
//User
Route::get('user' , function(){
    return view ('user');
});
Route::post('store_user' , [App\Http\Controllers\UserController::class , 'store_user']);

Route::get('userliste' , [App\Http\Controllers\UserController::class ,'userliste']);

Route::get('delete_userliste/{id}', [App\Http\Controllers\UserController::class ,'delete_userliste']);

Route::get('edit_userliste/{id}', [App\Http\Controllers\UserController::class ,'edit_userliste']);

Route::post('update_user/{id}', [App\Http\Controllers\UserController::class ,'update_user']);

//User\\
//Company

Route::get('company' , function(){
    return view ('company');
});
Route::post('store_company' , [App\Http\Controllers\CompanyController::class , 'store_company']);

Route::get('companyliste' , [App\Http\Controllers\CompanyController::class ,'companyliste']);

Route::get('delete_companyliste/{id}', [App\Http\Controllers\CompanyController::class ,'delete_companyliste']);

Route::get('edit_companyliste/{id}', [App\Http\Controllers\CompanyController::class ,'edit_companyliste']);

Route::post('update_company/{id}', [App\Http\Controllers\CompanyController::class ,'update_company']);


//Company\\