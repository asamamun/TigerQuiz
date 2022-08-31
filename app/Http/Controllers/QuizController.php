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
use Illuminate\Support\Facades\Request as FacadesRequest;

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
        if (Auth::user()->role == "1") {
            $quizzes = Quiz::with('category')->with('subcategory')->with('topic')->get();
        } else {
            $quizzes = Quiz::where('user_id', Auth::id())->with('category')->with('subcategory')->with('topic')->get();
        }

        return view("quiz.index")
            ->with('quizzes', $quizzes)
            ->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::pluck('name', 'id');
        $subcategories = Subcategory::pluck('name', 'id');
        $topics = Topic::pluck('name', 'id');
        return view('quiz.create',)->with('categories', $categories)
            ->with('subcategories', $subcategories)
            ->with('topics', $topics)

            ->with('user', Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuizRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizRequest $request)
    {
        $request->ques = json_encode($request->ques);
        $opt = str_replace('"', '', trim($request->ques, '[]'));
        // dd($opt);

        $request = [

            'question' => $request->question,
            'type' => $request->type,
            'op1' => $request->op1,
            'op2' => $request->op2,
            'op3' => $request->op3,
            'op4' => $request->op4,
            'ans' => $opt,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'topic_id' => $request->topic_id,
        ];
        // dd($data);
        $quizzes = Quiz::create($request);
        if ($quizzes) {
            return back()->with('message', 'Quiz ' . $quizzes->id . ' has been created Successfully!');
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
        $categories = Category::pluck('name', 'id');
        $subcategories = Subcategory::pluck('name', 'id');
        $topics = Topic::pluck('name', 'id');
        return view('quiz.show', compact('quiz'))->with('categories', $categories)
            ->with('subcategories', $subcategories)
            ->with('topics', $topics)

            ->with('user', Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quizzes
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        $categories = Category::pluck('name', 'id');
        $subcategories = Subcategory::pluck('name', 'id');
        $topics = Topic::pluck('name', 'id');
        return view('quiz.edit', compact('quiz'))->with('categories', $categories)
            ->with('subcategories', $subcategories)
            ->with('topics', $topics)

            ->with('user', Auth::user());
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
        $request->ques = json_encode($request->ques);
        $opt = str_replace('"', '', trim($request->ques, '[]'));

        $quiz->update($request->all());
        $quiz->ans = $opt;
        if ($quiz->save()) {
            return back()->with('message', "Update Successfully!");
        } else {
            return back()->with('message', "Update Failed!");
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
        if (Quiz::destroy($quiz->id)) {
            return back()->with('message', $quiz->id . ' has been deleted!');
        } else {
            return back()->with('message', 'Delete Failed!');
        }
    }

    public function qall(Request $request, Category $category){

        $cats  = Category::with('subcategories')->get();
        return view('playquiz.index', compact('cats'));
    }
    public function catquiz($id){
        

       $cats  = Category::with("subcategories.topics")->find($id);
   //    dd($cats);
       return view('playquiz.cat')
       ->with('cats', $cats);
    }
    public function subcatquiz($id){

        $scats  = Subcategory::with('topics');
        return view('playquiz.subcat', compact('scats'));
    }
    public function topicquiz($id){

        $scats  = Topic::with('quizzes')->get();
        return view('playquiz.topic', compact('cats'));
    }




    public function qshow(Request $request){
        $count = $request->count??"2";
        $whereArray = [];
        if($request->category_id){$whereArray['category_id'] = $request->category_id;}
        if($request->subcategory_id){$whereArray['subcategory_id'] = $request->subcategory_id;}
        if($request->topic_id){$whereArray['topic_id'] = $request->topic_id;}
        if(count($whereArray)){
            $quizzes = Quiz::where(['category_id'=>1,'subcategory_id'=>'2','topic_id'=>1])->inRandomOrder()->limit($count)->get();
        }
        else{
            $quizzes = Quiz::inRandomOrder()->limit($count)->get();
        }
        
        // dd($quizzes);

        return view('quiz/qz.qshow', compact('quizzes'));
    }
}
