<?php

namespace App\Http\Controllers;

use App\Models\Quizset;
use App\Http\Requests\StoreQuizsetRequest;
use App\Http\Requests\UpdateQuizsetRequest;
use App\Models\Category;
use App\Models\Quiz;
use App\Models\Subcategory;
use App\Models\Topic;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('quizset.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        $subcategories = Subcategory::pluck('name','id');
        $topics = Topic::pluck('name','id');
        return view('quizset.create')->with('categories',$categories)
        ->with('subcategories',$subcategories)
        ->with('topics',$topics)        
        ->with('user',Auth::user());
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuizsetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizsetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quizset  $quizset
     * @return \Illuminate\Http\Response
     */
    public function show(Quizset $quizset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quizset  $quizset
     * @return \Illuminate\Http\Response
     */
    public function edit(Quizset $quizset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizsetRequest  $request
     * @param  \App\Models\Quizset  $quizset
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizsetRequest $request, Quizset $quizset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quizset  $quizset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quizset $quizset)
    {
        //
    }

    public function showquiz(Request $request){
        // echo "hello";
        $quiz  = Quiz::where('category_id',$request->cid)->where('subcategory_id',$request->scid)->get();
        $quizzes = response()->json($quiz);
        return view('showquiz')->with('quizzes',$quizzes);
       
    }
}
