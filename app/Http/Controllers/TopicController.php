<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
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

        $alltopic = Topic::with('Subcategory')->get();
        return view("topic.index")
        ->with('alltopic',$alltopic)
        ->with('user',Auth::user());
        // dd($alltopic->categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $categories = Subcategory::pluck('name','id');
        // array_unshift($categories , ['-1'=>"Select Subcategory"]);
        // dd($categories);
        return view("topic.create")->with('categories',$categories)->with('user',Auth::user());
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
        

        
        $sc = new Topic();
        $sc->name = $request->name;
        $sc->active = $request->active;
        $sc->description = $request->description;
        $c = Subcategory::find($request->Subcategory_id);
        if($c->topics()->save($sc)){
            return back()->with('message','Subject ' .$sc->id. 'has been created successfully!');
        }
        else{
            return back()->with('message','Error!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(topic $topic)
    {
        return view('topic.show',compact('topic'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(topic $topic)
    {
        $categories = Subcategory::pluck('name','id');
        return view('topic.edit',compact('topic'))->with('categories',$categories)->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetopicRequest  $request
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetopicRequest $request, topic $topic)
    {
       

        $topic->name = $request->name;
        $topic->Subcategory_id = $request->Subcategory_id;
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
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(topic $topic)
    {
        if(topic::destroy($topic->id)){
            return back()->with('message',$topic->id. ' Deleted!!!!');
        }
    }
}
