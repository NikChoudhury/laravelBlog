<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function index(){
        echo "Hello Index Controller <br>";
        echo "To Make Laravel Controler <br>";
        echo "php artisan make:controller ControllerName";
    }
}
