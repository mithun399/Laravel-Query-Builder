<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class insertController extends Controller
{
    function insertData(){
        $db=DB::table('user')->insert(['name'=>'Mithun','email'=>'ms@gmail.com']);
        if($db==true){
            return "success";
        }
    }
}
