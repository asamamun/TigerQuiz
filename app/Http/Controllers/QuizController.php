<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Category;
use App\Models\Subcategory;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $quizzes = Quiz::all();
        // return view('quiz.index',compact('quizzes'))->with('user',Auth::user());
if(Auth::user()->role == "1"){
    $quizzes = Quiz::with('category')->with('subcategory')->with('topic')->get();
}
else{
    $quizzes = Quiz::where('user_id',Auth::id())->with('category')->with('subcategory')->with('topic')->get();
}
       
        return view("quiz.index")
        ->with('quizzes',$quizzes)
        ->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::pluck('name','id');
        $subcategories = Subcategory::pluck('name','id');
        $topics = Topic::pluck('name','id');
        return view('quiz.create')->with('categories',$categories)
        ->with('subcategories',$subcategories)
        ->with('topics',$topics)
        
        ->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuizRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizRequest $request)
    {
    //    dd($request->ques);
        $request = [
            
            'question'=>$request->question,
            'type'=>$request->type,
            'op1'=>$request->op1,
            'op2'=>$request->op2,
            'op3'=>$request->op3,
            'op4'=>$request->op4,
            'ans'=>$request->ans,
            'user_id'=>$request->user_id,
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id,
            'topic_id'=>$request->topic_id,
        ];
        // dd($data);
        $quizzes = Quiz::create($request);
        if($quizzes){
            return back()->with('message','Quiz ' .$quizzes->id. ' has been created Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        $categories = Category::pluck('name','id');
        $subcategories = Subcategory::pluck('name','id');
        $topics = Topic::pluck('name','id');
        return view('quiz.show',compact('quiz'))->with('categories',$categories)
        ->with('subcategories',$subcategories)
        ->with('topics',$topics)
        
        ->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quizzes
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        $categories = Category::pluck('name','id');
        $subcategories = Subcategory::pluck('name','id');
        $topics = Topic::pluck('name','id');
        return view('quiz.edit',compact('quiz'))->with('categories',$categories)
        ->with('subcategories',$subcategories)
        ->with('topics',$topics)
        
        ->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizRequest  $request
     * @param  \App\Models\Quiz  $quizzes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        //upload
       
        $quiz->update($request->all());
        if($quiz->save()){
                return back()->with('message',"Update Successfully!");
            }
            else{
                return back()->with('message',"Update Failed!");
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quizzes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        if(Quiz::destroy($quiz->id)){
            return back()->with('message',$quiz->id. ' has been deleted!');
        }else{
            return back()->with('message','Delete Failed!');
        }
    }
}
