<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class mergeController extends Controller
{
    function mergeData(){
        $dbOne=DB::table('user')->get();
        $dbTwo=DB::table('marks')->get();
      return  $merge=$dbOne->merge($dbTwo);
    }
}
