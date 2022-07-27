<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class selectController extends Controller
{
    //
    function distinct(){
        return DB::table('user')->distinct()->get();
    }
    function singleSelect(){
        return DB::table('user')->select('email')->get();
    }
    function multipleSelect(){
        return DB::table('user')->select('email','name')->get();
    }
}
