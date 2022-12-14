<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Http\Requests\StoreQuizsetRequest;
use App\Http\Requests\UpdateQuizsetRequest;
use App\Models\Quizset;
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

    public function viewanswer(Request $request)
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


    public function storeanswer(Request $request)
    {
        
        $u = User::find(Auth::id());
        $q = new Answer();
        $q->qset_id = $request->qset ?? null;
        $q->type = 'rq';
        $q->marks = $request->marks;
        $q->tquiz = $request->tquiz;

         // for guest user
  
            if( Auth::check() && $u->role == "3"){
                $u->answers()->save($q);
                return Redirect::to('student')->with('message', 'You got '. $request->marks . 'out of' . $request->tquiz);
            }
            else{
                return redirect('/')->with('message', 'Thanks! You got '. $request->marks. '/' . $request->tquiz);
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
        $u = User::find(Auth::id());
        $q = new Answer();
        $q->qset_id = $request->qset ?? null;
        $q->type = 'sq';
        $q->marks = $result;
        $q->tquiz = count($answers);
        if($u->role == "3"){
            $u->answers()->save($q);
            return Redirect::to('student')->with('message', 'You got '. $result . ' out of ' . count($answers));
        }
        else{
            return redirect('/')->with('message', 'Thanks for your Supports');
        }
        
    //191,192,193,194,195,196,197,198,200,201,202,203,204,205,206,207,208,209,210,211
  
/*         return view('quiz.result')
            ->with('quizzes', $quizzes)
            ->with('quizans', $quizans)
            ->with('total', count($answers))
            ->with('result', $result); */
    }

    public function apianswers(Request $request)
    {
        
        $answers = $request->all();
        unset($answers['_token']);
        return response()->json($answers);
        exit;
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
        $u = User::find(Auth::id());
        $q = new Answer();
        $q->qset_id = $request->qset ?? null;
        $q->type = 'sq';
        $q->marks = $result;
        $q->tquiz = count($answers);
        if($u->role == "3"){
            $u->answers()->save($q);
            return Redirect::to('student')->with('message', 'You got '. $result . ' out of ' . count($answers));
        }
        else{
            return redirect('/')->with('message', 'Thanks for your Supports');
        }
        
    }
}