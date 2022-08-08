<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilePostRequest;
use App\Models\Profile;
use App\Models\User;
use App\Myclass\MyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd(Auth::user());
       return view('profile.index')->with('user',Auth::user());
    }
    public function update(ProfilePostRequest $request){
// dd($request->file("image")->getFilename());
// dd($request->file("image")->getClientOriginalName());
/* $file = $request->file('image');
 
$name = $file->hashName(); // Generate a unique, random name...
$extension = $file->extension(); // Determine the file's extension based on the file's MIME type...
echo $name ." : ". $extension; */

//upload
$path = $request->file('image')->store('public/profiles');
$storagepath = Storage::path($path);

//resize, compress, watermark image
MyImage::image_resize_compress_watermark_store($storagepath);
//https://image.intervention.io/v2/api/resize


// dd($path);
        $u = User::find(Auth::id());
        $p = $u->profile? $u->profile :  new Profile();
        $p->fullname = $request->fullname;
        $p->phone = $request->phone;
        $p->bloodgroup = $request->bloodgroup;
        $p->image = $path;
        if($u->profile()->save($p)){
            return back()->with('message',"Your profile has been updated!!!");
        }
    
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
    {
        //
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
        //
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
