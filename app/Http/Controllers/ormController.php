<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ormController extends Controller
{
    function ret(){
       return Student::all();
    }
    function count(){
        return Student::count();
    }
}
