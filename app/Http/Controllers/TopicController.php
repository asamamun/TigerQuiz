<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alltopic = Topic::with('subcategory')->with('category')->get();
        return view("topic.index")
        ->with('alltopic',$alltopic)
        ->with('user',Auth::user());
        // dd($alltopic);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $category_id = Subcategory::pluck('id');
        // $subcategories = Subcategory::where('category_id','=',$category_id)->pluck('name','id');
        
        $categories = Category::pluck('name','id');
        $subcategories = Subcategory::pluck('name','id');

        return view("topic.create")->with('categories',$categories)
        ->with('subcategories',$subcategories)
        
        ->with('user',Auth::user());
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTopicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopicRequest $request)
    {
        //upload
        
        $tp = new Topic();
        $tp->name = $request->name;
        $tp->active = $request->active;
        $tp->description = $request->description;
        $c = Category::find($request->category_id);
        $sc = Subcategory::find($request->subcategory_id);
        // dd($sc);
        if($sc->topics()->save($tp)){
            return back()->with('message','Subject ' .$tp->id. ' has been created successfully!');
        }
        else{
            return back()->with('message','Subject not created!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        return view('topic.show',compact('topic'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(topic $topic)
    {
        $categories = Category::pluck('name','id');
        $subcategories = Subcategory::pluck('name','id');
        return view('topic.edit', compact('topic'))->with('categories',$categories)->with('subcategories',$subcategories)->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetopicRequest  $request
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopicRequest $request, Topic $topic)
    {
       

        $topic->name = $request->name;
        $topic->category_id = $request->category_id;
        $topic->subcategory_id = $request->subcategory_id;
        $topic->active = $request->active;
        $topic->description = $request->description;

        if($topic->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        if(Topic::destroy($topic->id)){
            return back()->with('message',$topic->id. ' Deleted!');
        }
    }

    // public function topic_list(){
    //     $topics = Topic::with(array('subcategory'=>function($query){
    //             $query->select('id','name');
    //         }))->get();
    // return view('topic.index',compact('topics'))->with('user',Auth::user());
    // }
}
