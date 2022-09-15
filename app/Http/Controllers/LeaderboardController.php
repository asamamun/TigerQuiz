<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Leaderboard;
use App\Models\Quizset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    public function index(){
        $answers = Answer::orderBy("marks", "desc")->orderBy('created_at')->where('type','sq')->paginate(15);
        $anslim = Answer::orderBy("marks", "desc")->orderBy('created_at')->where('type','sq')->paginate(4);
        // dd($answers);
        return view('leaderboard.index')
        ->with('anslim', $anslim)
        ->with('answers', $answers)
        ->with('user', Auth::user());
    }

    public function show($id){
        // dd($id);
        $quizset = Quizset::find($id);
        $leaders = Answer::where('qset_id',$id)
        ->orderBy('marks','desc')
        ->orderBy('created_at')        
        ->get();
        //paginate
        return view("leaderboard.show")
        ->with('quizset',$quizset)
        ->with('leaders',$leaders)
        ->with('user', Auth::user());
    }
}
