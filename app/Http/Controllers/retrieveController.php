<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class retrieveController extends Controller
{
    //show all data of DB
    function showAll(){
      return  DB::table('user')->get();
   

    }
    //show one data of DB
    function showOne(){
        return DB::table('user')->where('id','=','4')->first();
    }
    function findData(){
        return DB::table('user')->find(3);
    }

    //show all of cols data
    function pluckData(){
        return DB::table('user')->pluck('name');
    }
    function multiplepluckData(){
        return DB::table('user')->pluck('name','email');
    }
    //for specific value
    function value(){
        return DB::table('user')->where('id','=','3')->value('email');
    }
}
