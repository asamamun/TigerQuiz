<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Leaderboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    public function index(){
        // $anpage = Answer::paginate(10);
        $answers = Answer::orderBy("marks", "desc")->get();
        // dd($mark);
        return view('leaderboard.index')
        ->with('answers', $answers)
        ->with('user', Auth::user());
    }
}
