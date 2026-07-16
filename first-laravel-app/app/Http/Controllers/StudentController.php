<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function greet() 
    {
        return "Hello from Student Controller :)";
    }

    public function attendance()
    {
        return "Attendance Dashboard";
    }

    public function profile(?string $name = "User")
    {
        return [
            "name" => $name,
            "cgpa" => 9.85,
            "attendance" => 72
        ];
    }
}
