<?php

namespace App\Http\Controllers;

use App\Models\Quizset;
use App\Http\Requests\StoreQuizsetRequest;
use App\Http\Requests\UpdateQuizsetRequest;
use App\Models\Category;
use App\Models\Quiz;
use App\Models\Subcategory;
use App\Models\Topic;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class QuizsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $quizset = Quizset::all();

        if (Auth::user()->role == "1") {
            $quizset = Quizset::with('category')->with('subcategory')->get();
        } else {
            $quizset = Quizset::where('user_id', Auth::id())->with('category')->with('subcategory')->get();
        }

        return view("quizset.index", compact('quizset'))
            ->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $subcategories = Subcategory::pluck('name', 'id');
        $topics = Topic::pluck('name', 'id');
        return view('quizset.create')->with('categories', $categories)
            ->with('subcategories', $subcategories)
            ->with('topics', $topics)
            ->with('user', Auth::user());
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
    public function show()
    {

        // $quizset = Quizset::all();

        if (Auth::user()->role == "1") {
            $quizset = Quizset::with('category')->with('subcategory')->get();
        } else {
            $quizset = Quizset::where('user_id', Auth::id())->with('category')->with('subcategory')->get();
        }

        return view('quizset.show', compact('quizset'))
            ->with('user', Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quizset  $quizset
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    if (Auth::user()->role == "1") {
        $quizset = Quizset::all()->where('id', $id);
    } else {
        $quizset = Quizset::all()->where('user_id', Auth::id())->where('id', $id);
    }
   
        $catp = Category::pluck('name', 'id');
        $subcat = Subcategory::pluck('name', 'id');
        $topics = Topic::pluck('name', 'id');
        //  dd($catp);
        return view('quizset.edit', compact('quizset'))
        ->with('catp', $catp)
        ->with('subcat', $subcat)
        ->with('topics', $topics)
        ->with('user', Auth::user());
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
        // update all into prpfile table
        $quizset->update($request->all());
        // dd($request->all());
        // replace the request filename with desired name
       
        if ($quizset->save()) {
            return back()->with('message', "Update Successfully!");
        } else {
            return back()->with('message', "Update Failed!!!");
        }
    }
    public function showquiz(Request $request)
    {
        // echo "hello";
        $quiz  = Quiz::where('category_id', $request->cid)->where('subcategory_id', $request->scid)->get();
        return response()->json($quiz);
        //return view('showquiz')->with('quizzes',$quizzes);

    }
    public function storeset(Request $request)
    {
        $u = User::find(Auth::id());
        $q = new Quizset();
        $q->name = $request->name;
        $q->title = $request->title;
        $q->category_id = $request->cid;
        $q->subcategory_id = $request->scid;
        $q->topic_id = $request->tid;
        $q->stime = $request->stime;
        $q->entime = $request->entime;
        $q->quizzes = join(",", $request->quiz);
        // $q->quizzes = $request->quiz;

        // if ($u->quizsets()->save($q)) {
        //     return redirect()->refresh()->with('message', 'Quizset ' . $q->id . ' has been created!');
        // } else {
        //     return redirect()->back()->with('error', 'Please select atleast one quiz');
        // }

        if ($u->quizsets()->save($q)) {
            Session::flash('message', __('Quizset ' . $q->id . ' has been created!'));
            return response()->json(['message' => "Created", 'error' => 0]);
        } else {
            return response()->json(['message' => "Error", 'error' => 1]);
        }
    }

    public function showqset($id)
    {
        
        $qset = Quizset::find($id);
        // dd($qset);
        // $quiz = Quiz::all()->whereIn('id', $ar)->get();


        return view('playquiz.qset')
            ->with('qset', $qset);

        //  dd($qset);


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
}
