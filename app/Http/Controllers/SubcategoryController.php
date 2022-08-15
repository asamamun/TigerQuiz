<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allsubcat = Subcategory::with('category')->get();
        return view("subcategory.index")
        ->with('allsubcat',$allsubcat)
        ->with('user',Auth::user());
        // dd($allsubcat->categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $categories = Category::pluck('name','id');
        // array_unshift($categories , ['-1'=>"Select Category"]);
        // dd($categories);
        return view("subcategory.create")->with('categories',$categories)->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubcategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubcategoryRequest $request)
    {
        //upload
        

        
        $sc = new Subcategory();
        $sc->name = $request->name;
        $sc->active = $request->active;
        $sc->description = $request->description;
        $c = Category::find($request->category_id);
        if($c->subcategories()->save($sc)){
            return back()->with('message','Subject ' .$sc->id. ' has been created successfully!');
        }
        else{
            return back()->with('message','Error!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        return view('subcategory.show',compact('subcategory'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::pluck('name','id');
        return view('subcategory.edit',compact('subcategory'))->with('categories',$categories)->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubcategoryRequest  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubcategoryRequest $request, Subcategory $subcategory)
    {
        
        $subcategory->update($request->all());
        if($subcategory->save()){
                return back()->with('message',"Update Successfully!");
            }
            else{
                return back()->with('message',"Update Failed!!!");
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        if(Subcategory::destroy($subcategory->id)){
            return back()->with('message',$subcategory->id. ' Deleted!!!!');
        }
    }
}
