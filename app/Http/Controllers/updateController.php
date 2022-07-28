<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class updateController extends Controller
{
    //
    function onUpdate(){
      $db=  DB::table('user')
        ->where('id','=','1')
        ->update(['name'=>'Mithun']);
        if($db==true){
            return "success";
        }
        else {
            return "failed";
        }
    }
}
