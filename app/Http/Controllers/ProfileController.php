<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ProfileController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(Auth::user()->profile);
        $bdroup = [
            'A+' => 'A+',
            'A-' => 'A-',
            'B+' => 'B+',
            'B-' => 'B-',
            'O+' => 'O+',
            'O-' => 'O-',
            'AB+' => 'AB+',
            'AB-' => 'AB-',
        ];

        $categories = Category::pluck('name','id');
        // dd(Auth::user()->profile);
        return view('profile.index')->with('bloodgroup',$bdroup)->with('categories',$categories)->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileRequest $request){
        // pathinfo();
    //    image require for the first time
          if(!$request->has('image')){
            return redirect()->back()->with('error','Please Upload Image!');}
        
        $unrid = Auth::user()->name.'_'.Auth::user()->role.Auth::id();
        $image = $request->file('image');
        $filename = $unrid.'.png';
        $path = $image->storeAs('public/profiles',$filename);
        $storagepath = Storage::path($path);
        // desired format
        $img = Image::make($storagepath)->fit(330,330);
        // save image
        $img->save($storagepath);

        $u = User::find(Auth::id());
        $p = new Profile();
        
        $p->category_id = $request->category_id;
        $p->fullname = $request->fullname;
        $p->institute = $request->institute;
        $p->batch = $request->batch;
        $p->subject = $request->subject;
        $p->designation = $request->designation;
        $p->gender = $request->gender;
        $p->phone = $request->phone;
        $p->address = $request->address;
        $p->bio = $request->bio;
        $p->yt = $request->yt;
        $p->fb = $request->fb;
        $p->in = $request->in;
        $p->bloodgroup = $request->bloodgroup;
        $p->guardianname = $request->guardianname;
        $p->guardianemail = $request->guardianemail;
        $p->guardianphone = $request->guardianphone;
        $p->image = $filename;
        if($u->profile()->save($p)){
            return back()->with('message',"Your profile has been Created!");
        }
        else{
            return back()->with('message',"Create Failed!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileRequest  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
     {  
        //delete previous image
        $u = User::find(Auth::id());
        $p = $u->profile; 
        $filename = $p->image;

        if($request->file('image')){
            if($filename){Storage::delete($filename);}

         // Image rename and replace the file name with desired name
            $path = $request->file('image')->storeAs('public/profiles',$filename);
            $storagepath = Storage::path($path);
            $img = Image::make($storagepath)->fit(330,330);
            $img->save($storagepath);

        } else{
            if($p?->image){ $path = $filename;}
            else{ $path = null;}}
        
        // update all into prpfile table
        $profile->update($request->all());
        // replace the request filename with desired name
        $profile->image = $filename;
        if($profile->save()){
                return back()->with('message',"Update Successfully!");
            }
            else{
                return back()->with('message',"Update Failed!!!");
            }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
         // no need now
        // $oextn = $image->getClientOriginalExtension();
        // $oname = $image->getClientOriginalName();
        // $filename = Str::of($oname)->scan('%[^.].%s');
        // $rename = str_replace($filename,'', $unrid.'.'.'png');
        // dd($filename[1], $rename);
}
