<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DB_test extends Controller
{
    function select(){
        #Retrieving All Rows From A Table
        // $users = DB::table('users')->get();

        #Retrieving A Single Row / Column From A Table
        // $users = DB::table('users')->where('id',1)->get();
        // $users = DB::table('users')->where('id','=',1)->get();

        #Check Particuler Data Exist or Not
        // $users = DB::table('users')->where('id','=',1)->exists();
        //exists() return 1 or nothing
        // $users = DB::table('users')->where('id','=',1)->doesntExist();
        // doesntExist() return 1 or Nothing
        // return $users;

        #Count
        $count = DB::table('users')->where('name','=',"Nikumani Choudhury")->count();
        echo "Count= ".$count;
        echo "<br>";

        #Max
        $max = DB::table('users')->max('id');
        echo "Max= ".$max;
        echo "<br>";

        #Min 
        $min = DB::table('users')->min('id');
        echo "Min= ".$min;
        echo "<br>";

        #Select Statements
        $users = DB::table('users')
            ->select('name', 'email as user_email')
            ->get();
        echo "<pre>";
        echo $users;
        echo "<br>";

        #The distinct method allows you to force the query to return distinct results:
        // $users = DB::table('users')->distinct()->get();

        #Raw Expressions
        // Sometimes you may need to insert an arbitrary string into a query. 
        // To create a raw string expression, 
        // you may use the raw method provided by the DB facade:

        $usersRow = DB::select(DB::raw('select * from users'));

        echo "<pre>";
        print_r ($usersRow);
        echo "<br>";  
    }

    function insert(){
        DB::table('users')->insert(
            array('name'=>'xyz','email'=>'xyz@gmail.com','password'=>'xyz1234')
        );
    }

    function update(){
        DB::table('users')
        ->where('id',3)
        ->update(
            array('name'=>'New','email'=>'new@gmail.com')
        );
    }

    function delete(){
        DB::table('users')->where('id',3)->delete();
    }
}
