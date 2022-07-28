<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinController extends Controller
{
    function leftJoin(){
     return   DB::table('user')
        ->leftJoin('marks','user.name','=','marks.name')
        ->get();
    }
    function rightJoin(){
        return   DB::table('user')
        ->rightJoin('marks','user.name','=','marks.name')
        ->get();
    }
}
