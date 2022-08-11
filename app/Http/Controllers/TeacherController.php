<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
    return view("teacher.index");
    }

    // public function login()
    // {
    //     return view("teacher.login");
    // }

    public function reg()
    {
        return view("teacher.register");
    }

    public function forgetpass()
    {
        return view ("teacher.forgot");
    }
}
