<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;


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

#Component In Laravel
Route::view('page','page');
Route::view('page2','page2');

#Form in Laravel
Route::view('my_form','form');

#To handle A form
Route::post('formSubmit', [FormController::class, 'index'] );
Route::get('formSubmit', [FormController::class, 'index'] );

#Blade Tamplate in Laravel
Route::get('Web_Tamplate', function(){
    return view('web',array('data'=>array('name'=>'Nik')),array('newdata'=>array(1,2,3,4,5,6,7)));
});