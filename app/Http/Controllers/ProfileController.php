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
    public function store(StoreProfileRequest $request)
    {   // dd($request->file('image'));
        // pathinfo();
        $unrid = Auth::user()->name.'_'.Auth::user()->role.Auth::id();
        $oname = $request->file('image')->getClientOriginalName();
        // $oextn = $request->file('image')->getClientOriginalExtension();
        
        // rename the GD image path
        $rename = str_replace($oname,'', $unrid.'.'.'png');
        // replace the file name with the new name
        $path = $request->file('image')->storeAs('public/profiles',$rename);

        $storagepath = Storage::path($path);
        // desired format
        $img = Image::make($storagepath)->fit(310,310);
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
        $p->image = $path;
        if($u->profile()->save($p)){
            return back()->with('message',"Your profile has been Created!");
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

        if($request->file('image')){
            if($p->image){
                Storage::delete($p->image);
            }
          
            // replace the file name with the new name
            $unrid = Auth::user()->name.'_'.Auth::user()->role.Auth::id();
            $oname = $request->file('image')->getClientOriginalName();
            // $oextn = $request->file('image')->getClientOriginalExtension();
            $rename = str_replace($oname, '',  $unrid.'.'.'png');
            $path = $request->file('image')->storeAs('public/profiles',$rename);
            
            // $path = $request->file('image')->store('public/profiles');
            $storagepath = Storage::path($path);
            $img = Image::make($storagepath)->fit(310,310);
            $img->save($storagepath);
        }
        else{
            if($p?->image){
                $path = $p->image;
            }
            else{
               $path = null; 
            }
        }

        $p->category_id = $request->category_id;
        $p->fullname = $request->fullname;
        $p->institute = $request->institute;
        $p->batch = $request->batch;
        $p->subject = $request->subject;
        $p->designation = $request->designation;
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
        $p->image = $path;
        if($u->profile()->save($p)){
            return back()->with('message',"Your profile has been updated!");
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
}
