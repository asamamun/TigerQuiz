<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Leaderboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    public function index(){
        $answers = Answer::orderBy("marks", "desc")->orderBy('created_at')->where('type','sq')->paginate(15);
        $anslim = Answer::orderBy("marks", "desc")->orderBy('created_at')->where('type','sq')->paginate(4);
        // dd($mark);
        return view('leaderboard.index')
        ->with('anslim', $anslim)
        ->with('answers', $answers)
        ->with('user', Auth::user());
    }
}
