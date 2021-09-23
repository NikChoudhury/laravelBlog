<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
class UserProfile extends Controller
{
    function getData(){
        
        // return Profile::all();
        #We Can Use Query Builder In Laravel Model
        $data = Profile::where('id', 1)
               ->orderBy('name')
               ->get();
        return $data;
    }

    function deleteData(){
        
        // return Profile::all();
        #We Can Use Query Builder In Laravel Model
        $res = Profile::find(1);
        if (isset($res)) {
            $res->delete(); //Delete One by One 
        }
        #for Multiple Delete
        // Profile::destroy(array(4,5,6))
              
        return Profile::all();
    }

    function insertData(){
        $res = new Profile;

        $res->name="Nikz";
        $res->email="nikz@email.com";
        $res->password="passwordNikz";
        $res->save();

        return Profile::all();
    }

    function updateData(){
        $res = Profile::find(5);

        $res->name="Nikumani Choudhury";
        $res->email="nikumanichoudhury@email.com";
        $res->password="passwordNikzzzz";
        $res->save();

        # Or Using Query Builder
        // Profile::where('id',4)
        // ->update(
        //     array('name'=>'New','email'=>'new@gmail.com')
        // );

        return Profile::all();
    }
}
