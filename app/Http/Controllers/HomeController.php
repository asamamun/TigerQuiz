<?php

namespace App\Http\Controllers;

use App\Models\Quizset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $quizset = Quizset::with('category')->with('subcategory')->get();
        return view('welcome',compact('quizset'));
    }

     /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function qsets()
    // {
        
    //     $quizset = Quizset::with('category')->with('subcategory')->get();
        

    //     return view("welcome", compact('quizset'))
    //         ->with('user', Auth::user());
    // }
}
