<?php

namespace App\Http\Controllers;

use App\Models\Quizset;
use App\Http\Requests\StoreQuizsetRequest;
use App\Http\Requests\UpdateQuizsetRequest;

class QuizsetController extends Controller
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
    public function show(Quizset $quizset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quizset  $quizset
     * @return \Illuminate\Http\Response
     */
    public function edit(Quizset $quizset)
    {
        //
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
        //
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
