<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
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
        return view('profile.index')->with('bloodgroup',$bdroup)->with('user',Auth::user());
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
        // dd($request->file('image'));
        $path = $request->file('image')->store('public/profiles');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(320, 320);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        $u = User::find(Auth::id());
        $p = new Profile(); 
        $p->category_id = $request->category_id;
        $p->fullname = $request->fullname;
        $p->institute = $request->institute;
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
            return back()->with('message',"Your profile has been Created!!!");
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
    { $userid = Auth::id();
        $path = $request->file('image')->store('public/profiles');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);
        

        // resize image instance
        $img->resize(320, 320);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        $u = User::find(Auth::id());
        $p = $u->profile;
        if($p->image){
            Storage::delete($p->image);
        }
        $p->category_id = $request->category_id;
        $p->fullname = $request->fullname;
        $p->institute = $request->institute;
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
