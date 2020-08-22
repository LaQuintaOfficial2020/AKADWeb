<?php

namespace App\Http\Controllers;

use App\Quizes;
use Illuminate\Http\Request;

use DB;
class QuizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $both = array();
        $questions = DB::table('questions')
            ->where('quizId',$id)
            ->get()
            ->shuffle();

        foreach($questions as $x){
            $data = $both;
            $answers = DB::table('answers')
            ->where('questionId',$x->id)
            ->get()
            ->shuffle();

            array_push($both,["question"=>$x,"choices"=>$answers]);
        }

        return view('exam',['both'=>$both,'count'=>count($questions),'id'=>$id]);
    }

    public function checker(Request $request){
        // $questions = DB::table('questions')
        //     ->where('quizId',$id)
        //     ->get();
        // $shuffled = $questions->shuffle();
        // dd($request);
        $count = 0;
        // dd($request['answer'."'".0."'"]);
        for($i=0;$i<$request->count;$i++){
            $res= DB::table('answers')
                        ->select('point')
                        ->where('id',$request->input($i))
                        ->get();

            $count += $res[0]->point;
        }
        // dd(date('Y-m-d'));
        DB::table('student_activities')
            ->where('quizId',$request['id'])
            ->update([
                'status'=> 'done',
                'totalPoints' => $count,
                'dateTaken' => "".date('Y-m-d')
            ]);
        return view('dashboard',['flash_message'=>'Exam submission success! Thank you for you hardwork!']);
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

    private function randomizeQuestion($question){
        // $newList = 
    }

    private function randomizeChoices(){

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
     * @param  \App\Quizes  $quizes
     * @return \Illuminate\Http\Response
     */
    public function show(Quizes $quizes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quizes  $quizes
     * @return \Illuminate\Http\Response
     */
    public function edit(Quizes $quizes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quizes  $quizes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quizes $quizes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quizes  $quizes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quizes $quizes)
    {
        //
    }
}
