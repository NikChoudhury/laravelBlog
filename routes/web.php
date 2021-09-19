<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ValidForm;
use App\Http\Controllers\SessionTest;
use App\Http\Controllers\DB_test;

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
// Route::view('page','page');
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

#Blade Template Part2 (Layout)
Route::view('news1','news1');
Route::view('news2','news2')->middleware('UserCheck'); //Route Middleware

#Middleware In Laravel
Route::view('denied','denied');

#Route Middleware
// Route::view('news2','news2')->middleware('UserCheck');

#Group Middleware
Route::middleware(['UserCheck'])->group(function () {
    Route::view('news1','news1');
    Route::view('page','page');
});

#Form Validation In Laravel
Route::view('form-validation','formValidation');
Route::post('formValidation', [ValidForm::class, 'index'] );

#Session In Laravel
Route::get('session-set', [SessionTest::class, 'session_set']);
Route::get('session-get', [SessionTest::class, 'session_get']);
Route::get('session-remove', [SessionTest::class, 'session_remove']);
Route::get('session-check', [SessionTest::class, 'session_check']);

Route::view('login', 'login');
Route::post('userLoginSubmit', [SessionTest::class, 'user_login_submit']);
// Route::get('profile', [SessionTest::class, 'user_login_check']);
/*Route::get('logout', function () {
    if (session()->has('name')) {
        session()->forget('name');
        session()->flash('error', 'Logout Successfull !!');
        return redirect('login');
    }else{
        session()->flash('error', 'Access Denied !!');
        return redirect('login');
    }
});*/
#Using Middleware
Route::middleware(['UserAuth'])->group(function () {
    Route::view('profile','profile');
    Route::get('logout', function () {
       session()->has('name'); 
            session()->forget('name');
            session()->flash('error', 'Logout Successfull !!');
            return redirect('login');
    });
});

# Laravel Query Builder
Route::get('select', [DB_test::class, 'select']);
Route::get('insert', [DB_test::class, 'insert']);
Route::get('update', [DB_test::class, 'update']);
Route::get('delete', [DB_test::class, 'delete']);