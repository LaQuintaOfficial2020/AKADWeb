<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\Students;

use Session;
use DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Students::where('userId',Session::get('userId'))->get();
        $activities = DB::table('student_activities')
                    ->select([
                        '*',
                        DB::raw('(Case
                            WHEN quizId != null OR quizId != "" THEN "Quiz"
                            ELSE "Seatwork"
                            END
                        ) as quizType')
                    ])
                    ->where('studId',Session::get('userInfo')[0]->id)
                    ->get();
                    // dd(Session::all());
        $classDetail = DB::table('classrooms')
                        ->join('class_details','class_details.classId','=','classrooms.id')
                        ->join('students','class_details.studId','=','students.id')
                        ->select([
                            'classrooms.*'
                        ])
                        ->where('status','=','active')
                        ->where('students.id','=',$student[0]->id)
                        ->get();
        // dd($classDetail);
        return view('studentProfile',['student'=>$student,'activities'=>$activities,'classDetail'=>$classDetail]);
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
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
