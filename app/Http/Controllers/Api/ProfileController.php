<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        //
    }

    public function getActivities(Request $request){
        $activities = DB::table('student_activities')
        ->leftjoin('quizes','student_activities.quizId','=','quizes.id')
        ->leftjoin('seatworks','student_activities.seatWorkId','=','seatworks.id')
        ->select([
            'student_activities.*',
            DB::raw('(Case
                WHEN quizId != null OR quizId != "" THEN "Quiz"
                ELSE "Seatwork"
                END
            ) as quizType'),
            DB::raw('(Case
                WHEN quizId != null OR quizId != "" THEN quizes.name
                WHEN seatWorkId != null OR seatWorkId != "" THEN seatworks.name
                ELSE ""
                END
            ) as name')
        ])
        ->where('studId',$request['studId'])
        ->get();

        return response()->json(['activities'=>$activities],200);
       
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
    public function show($id)
    {
        //
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
