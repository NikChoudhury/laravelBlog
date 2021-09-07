<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getId($id=''){
        return view('user',array('user_id'=>$id));
    }
}
