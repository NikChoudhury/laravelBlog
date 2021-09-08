<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request){
        // return $request->post();
        # If Called In get Method
        // return $request->get('name');
        #or
        // return $request->query();
        #Some Other function
        // return $request->method(); --> gives method of the from
        // return $request->post(); -->Gives path of the form
        $method = $request->method();
        // return $method;
        if ($method=="POST") {
            return array($request->post(),$method);
        }else {
            return array($request->query(),$method);
        }
    }
}
