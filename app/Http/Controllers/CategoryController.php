<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Subcategory;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index',compact('categories'))->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create')->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
       
        $data = [
            'name'=>$request->name,
            'description'=>$request->description,
            'active'=>$request->active,
        ];
        // dd($data);
        $cat = Category::create($data);
        if($cat){
            return back()->with('message','Category ' .$cat->id. ' has been created Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('category.show',compact('category'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit',compact('category'))->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //upload
       
        $category->update($request->all());
        if($category->save()){
                return back()->with('message',"Update Successfully!");
            }
            else{
                return back()->with('message',"Update Failed!");
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if(Category::destroy($category->id)){
            return back()->with('message',$category->id. ' has been deleted!');
        }else{
            return back()->with('message','Delete Failed!');
        }
    }
    // ======================
    // API categories
    public function apicat()
    {
        $cat = Category::all();
        return response()->json($cat);
    }
    
      // ======================
    // API subcategories
    public function apisubcat($cid)
    {
        $scat  = Subcategory::where('category_id', $cid)->get();
        // dd($id);
        return response()->json($scat);
    }
       // API topics
       public function apitopic($scid)
       {
           $topic  = Topic::where('subcategory_id', $scid)->get();
        //    dd($id);
           return response()->json($topic);
       }
}
