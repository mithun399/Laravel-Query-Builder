<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
    //
    function deleteData(){
        $db= DB::table('user')
        ->where('name','=','mithun')
        ->delete();
        if($db==true){
            return "success";
        }
        else {
            return "failed";
        }
    }
    function delete(){
        $db= DB::table('user')->delete();
        if($db==true){
            return "success";
        }
        else {
            return "failed";
        }
    }
    function trun(){
      return  $db= DB::table('user')->truncate();
      
    }
}
