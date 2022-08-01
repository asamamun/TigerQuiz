<?php

namespace App\Http\Controllers;

use App\Models\PhoneModel;
use App\Http\Requests\StorePhoneModelRequest;
use App\Http\Requests\UpdatePhoneModelRequest;

class PhoneModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePhoneModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhoneModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhoneModel  $phoneModel
     * @return \Illuminate\Http\Response
     */
    public function show(PhoneModel $phoneModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhoneModel  $phoneModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PhoneModel $phoneModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhoneModelRequest  $request
     * @param  \App\Models\PhoneModel  $phoneModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhoneModelRequest $request, PhoneModel $phoneModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhoneModel  $phoneModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhoneModel $phoneModel)
    {
        //
    }
}
