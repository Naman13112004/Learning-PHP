<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function greet() 
    {
        return "Hello from Student Controller :)";
    }
}
