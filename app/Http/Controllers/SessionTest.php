<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionTest extends Controller
{
    function session_set(Request $req){
        // Via a request instance...
        // $req->session()->put('name',"Nik");

        // Via the global "session" helper...
        session(['name'=>"Nik",'age' => '24',]);
    }

    function session_get(Request $req){
    //    echo $req->session()->get('age');
       #Retrieving All Session Data
       $data = $req->session()->all();
       echo "<pre>";
       print_r($data);
    }

    function session_remove(Request $req){
        // The forget method will remove a piece of data from the session. 

        # Forget a single key...
        $req->session()->forget('name');
        # Forget multiple keys...
        // $req->session()->forget(['name', 'age']);
        # For Delete All Session Data
        // $req->session()->flush();
    }

    function session_check(Request $req){
        # For Check Session Exist Or Not
        if ($req->session()->has('name')) {
            echo "The Session Name Is exist";
        }else{
            echo "The Session Name Is Not exist";
        }
    }
    function user_login_check(Request $req){
        if ($req->session()->has('name')) {
            return view('profile');
        }else{
            $req->session()->flash('error', 'Access Denied !!');
            return redirect('login');
        }
    }
    function user_login_submit(Request $req){
        $req->validate([
            'email'=>'required|email',
            'password'=>'required',
        ],
        [
            'email.required' => 'We need to know your email address!',
            'email.email' => 'Please enter a valid email address.'
        ]
        );
        $email= $req->input('email');
        $password= $req->input('password');

        if ($email=='a@gmail.com' && $password =='1234') {
            $req->session()->put('name','Nikumani Choudhury');
            return redirect('profile');
        }else{
            $req->session()->flash('error', 'Please Enter Valid login Details!!');
            return redirect('login');
        }
    }
}
