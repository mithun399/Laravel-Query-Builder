<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aggregatesController extends Controller
{
    function countRow(){
        return DB::table('user')->count();
    }
    function max(){
        return DB::table('user')->max('id');
    }
    function min(){
        return DB::table('user')->min('id');
    }
    function avg(){
        return DB::table('user')->avg('id');
    }
}
