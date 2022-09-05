<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Http\Requests\StoreQuizsetRequest;
use App\Http\Requests\UpdateQuizsetRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AnswerController extends Controller
{
    public function showquiz(Request $request)
    {
        // echo "hello";
        $quiz  = Quiz::where('category_id', $request->cid)->where('subcategory_id', $request->scid)->get();
        return response()->json($quiz);
        

    }
    public function storeanswer(Request $request)
    {
        $u = User::find(Auth::id());
        $q = new Answer();
        $q->qid = $request->qid;
        $q->qsid = $request->qsid;
        $q->gans = join(",", $request->gans);
        $q->marks = $request->marks;
        // $q->quizzes = join(",", $request->quiz);

        if($u->answers()->save($q)){
           Session::flash('message', __('Your Answer of' . $q->id . ' has been submited!'));
             return response()->json(['message'=>"Created",'error'=>0]);
        }
        else{
            return response()->json(['message'=>"Error",'error'=>1]);
        }

    }
}
