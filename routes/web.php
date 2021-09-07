<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\UserController;

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
    return view('index');
});

#Optional Parameters
Route::get('/user/{id?}', function($id=null){
    echo $id;
    return view('user');
});

#To Call A Controller
Route::get('users_controller',[User::class, 'index']);

Route::get('/user_id/{id?}',[UserController::class, 'getId']);
//Old Method 
// Route::get('/users_controller','App\Http\Controllers\User@index');