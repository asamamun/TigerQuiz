<?php

namespace App\Http\Controllers;

use App\Models\Leaderboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    public function index(){
        $ldbs= Leaderboard::with('user', 'quizset')->get();
        // dd($lbs);
        return view('leaderboard.index')
        ->with('lbs', $ldbs);
    }
}
