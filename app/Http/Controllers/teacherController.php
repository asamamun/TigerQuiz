<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function index()
    {
    return view("teacher.dashboard");
    }

    public function login()
    {
        return view("teacher.index");
    }

    public function reg()
    {
        return view("teacher.register");
    }

    public function forgetpass()
    {
        return view ("teacher.forgot");
    }
}
