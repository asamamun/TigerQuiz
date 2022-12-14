<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $marks = Answer::all()->where('user_id', Auth::user()->id);
        $marks = Answer::orderBy("id", "desc")->where('user_id', Auth::user()->id)->paginate(10);
        
        // $wl = Answer::whereIn('marks', ['W', 'L'])->count();
        // $total = Answer::count();
        // $percent = $wl / $total * 100;

        // dd($marks);
        if (!$marks->count() == 0) {
            foreach ($marks as $mk) {
                $qsid = $mk->quizset?->name;
                $mks = $mk->marks;
                $tq = $mk->tquiz;
                break;
            }
            return view('student.index', compact('marks', 'qsid', 'mks', 'tq'))
                ->with('user', Auth::user());
        }
        //  dd($marks, $qsid, $mks, $tq,$uid );
        else {
            return view('student.index', compact('marks'))
                ->with('user', Auth::user());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
