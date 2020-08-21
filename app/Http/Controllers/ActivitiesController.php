<?php

namespace App\Http\Controllers;

use App\Activities;
use Illuminate\Http\Request;
use Session;
use DB;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $count =   DB::
        // $activities = Activities::where('studId', Session::get('userInfo')[0]->id)->get();
        $activities = DB::table('activities as a')
                    ->select([
                        'a.id','studId','teacherId','name','duration',
                        DB::raw('(select count(*) from questions q where q.quizId = a.quizId)as items' ),
                        // DB::raw('(select sum()) as score')                   
                    ])
                    ->where('a.studId',Session::get('userInfo')[0]->id)->get();
        return view('activitiesOverview',['activities'=>$activities]);
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
     * @param  \App\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function show(Activities $activities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function edit(Activities $activities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activities $activities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activities $activities)
    {
        //
    }
}
