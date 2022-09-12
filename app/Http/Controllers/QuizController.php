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
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        // Answer set in comma
        $request->ques = json_encode($request->ques);
        $opt = str_replace('"', '', trim($request->ques, '[]'));

        if ($request->file('quizimage')) {
            // $qid  = Quiz::orderBy('id', 'desc')->first()->id;
            $qid  = Quiz::all()->last()->id;
            $filename = $qid + 1 . '.jpg';
            // dd($filename);
            $path = $request->file('quizimage')?->storeAs('public/quizimages', $filename);

            $storagepath = Storage::path($path);
            // desired format ->fit(330, 330)
            $img = Image::make($storagepath);
            // save image
            $img->save($storagepath);
        }


        $request = [

            'question' => htmlentities($request->question),
            'type' => $request->type,
            'op1' => htmlentities($request->op1),
            'op2' => htmlentities($request->op2),
            'op3' => htmlentities($request->op3),
            'op4' => htmlentities($request->op4),
            'ans' => $opt,
            'qimage' => $filename ?? '',
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'topic_id' => $request->topic_id,
        ];
        /*         $request = [

            'question' => $request->question,
            'type' => $request->type,
            'op1' => $request->op1,
            'op2' => $request->op2,
            'op3' => $request->op3,
            'op4' => $request->op4,
            'ans' => $opt,
            'qimage' => $filename ?? '',
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'topic_id' => $request->topic_id,
        ]; */
        // dd($data);
        $quizzes = Quiz::create($request);
        if ($quizzes) {
            return back()->with('message', 'Quiz ' . $quizzes->id . ' has been created Successfully!')->withinput(array('category_id' =>  $quizzes->category_id));
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


        if ($request->file('quizimage')) {
            if ($quiz->qimage) {
                Storage::delete($quiz->qimage);
            }

            // Image rename and replace the file name with desired name
            $path = $request->file('quizimage')->storeAs('public/quizimages', $quiz->qimage);
            $storagepath = Storage::path($path);
            // ->fit(330, 330)
            $img = Image::make($storagepath);
            $img->save($storagepath);
        }


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

    public function qall(Request $request, Category $category)
    {

        $cats  = Category::with('subcategories')->get();
        return view('playquiz.index', compact('cats'));
    }
    public function catquiz($id)
    {


        $cats  = Category::with("subcategories.topics")->find($id);
        //    dd($cats);
        return view('playquiz.cat')
            ->with('cats', $cats);
    }
    public function subcatquiz($id)
    {

        $scats  = Subcategory::with('topics');
        return view('playquiz.subcat', compact('scats'));
    }
    public function topicquiz($id)
    {

        $topics = Topic::with('quizzes')->get();
        return view('playquiz.topic', compact('topics'));
    }




    public function qshow(Request $request)
    {
        $count = $request->count ?? "10";

        $quizzes = Quiz::inRandomOrder()->limit($count)->get();
        $categories = Category::pluck('name', 'id');
        return view('quiz/qz.qshow', compact('quizzes', 'categories'));
    }
    public function dynamicquiz(Request $request)
    {
        $count = $request->count ?? "10";
        $whereArray = [];
        if ($request->cid) {
            $whereArray['category_id'] = $request->cid;
        }
        if ($request->scid  && $request->scid != "-1") {
            $whereArray['subcategory_id'] = $request->scid;
        }
        if ($request->tid  && $request->tid != "-1") {
            $whereArray['topic_id'] = $request->tid;
        }
        if (count($whereArray)) {
            $quizzes = Quiz::where($whereArray)->inRandomOrder()->limit($count)->get();
        } else {
            $quizzes = Quiz::inRandomOrder()->limit($count)->get();
        }

        // return response()->json($quizzes->toJson(JSON_PRETTY_PRINT));
        return response()->json($quizzes->toJson());
    }
        // API
    public function randomquestions(){
        $q = Quiz::inRandomOrder()->limit(15)->get();
        return response()->json($q);}

    // public function fix(){
    //     $quizs = Quiz::all();
    //     foreach($quizs as $quiz){

    //         $request = [
    //             'question' => htmlentities( $quiz->question),
    //             'op1' => htmlentities( $quiz->op1),
    //             'op2' => htmlentities( $quiz->op2),
    //             'op3' => htmlentities( $quiz->op3),
    //             'op4' => htmlentities( $quiz->op4),
    //         ];
    //         Quiz::where('id',$quiz->id)->update($request);
    //     }
    // } 

    public function qimage()
    {
        // if (Auth::user()->role == "1") {
        //     $quizzes = Quiz::with('category')->with('subcategory')->with('topic')->get();
        // } else {
        //     $quizzes = Quiz::where('user_id', Auth::id())->with('category')->with('subcategory')->with('topic')->get();
        // }

        return view('playquiz.qimage')
            // ->with('quizzes', $quizzes)
            ->with('user', Auth::user());
    }
}
