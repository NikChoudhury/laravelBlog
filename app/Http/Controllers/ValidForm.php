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
            'doc'=>'required|mimes:jpg,jpeg,png|max:1024',
        ],
        [
            'name.required' => 'We need to know your Name',
            'email.required' => 'We need to know your email address!',
        ]
        );
        # For Upload File 
        // $request->file('doc')->store('media'); 
        // This will upload file to storage/app/media folder with a unique name
        # Upload File with a given name
        $fileName = time().'.'.$request->doc->extension() ;
        $request->doc->move(public_path('uploads/media'), $fileName);
        // This will Upload file to public/uploads/media folder with a unqiue name of timebin
        // return $request->post(); 
        return back()
            ->with('success','You have successfully Save Data.')
            ->with('doc',$fileName);
    }
}
