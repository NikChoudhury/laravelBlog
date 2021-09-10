<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidForm extends Controller
{
    function index(Request $request){
        // return "hello World !!";
        $request->validate([
            'name'=>'required|min:3|max:7',
            'email'=>'required|email',
        ],
        [
            'name.required' => 'We need to know your Name',
            'email.required' => 'We need to know your email address!',
        ]
        );
        return $request->post();
    }
}
