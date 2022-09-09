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
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;

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
        $q->qset_id = $request->qset_id ?? null;
        $q->type = $request->type;
        $q->marks = $request->marks;
        $q->tquiz = $request->tquiz;
        // $q->quizzes = join(",", $request->quiz);

        if ($u->answers()->save($q)) {
            Session::flash('message', __('Your Answer has been submited!'));
            return redirect()->back()->with('message', 'Your marks have been saved');
        } else {
            return back()->with('message', 'Errors');
        }
    }



    public function result(Request $request)
    {


        $answers = $request->all();
        unset($answers['_token']);
        $quizid = array_keys($answers);
        $quizid = Arr::map($quizid, function ($value, $key) {
            return substr($value, 3);
        });
        $quizans = array_values($answers);
        $quizzes = Quiz::whereIn('id', $quizid)->get();
        $result = 0;
        foreach ($quizzes as $quiz) {
            if ($quiz->ans == $answers['box' . $quiz->id]) {
                $result++;
            }
            //echo $quiz->id ." :". $quiz->ans. " =  User ans:" . $answers['box'.$quiz->id] . "<br>";
        }
        // dd($answers,$quizzes , $quizid, $quizans);

        return view('quiz.result')
            ->with('quizzes', $quizzes)
            ->with('quizans', $quizans)
            ->with('total', count($answers))
            ->with('result', $result);
    }
}
