<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

     /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function dashboard(Request $request){
            $role = Auth::user()->role; 
            if($role == '1') {
                return redirect('/dashboard');
            } else if($role == '2') {
                return redirect('/teacher');
            } else if($role == '3') {
                return redirect('/student');
                } else  return redirect('/');
            } 
}
