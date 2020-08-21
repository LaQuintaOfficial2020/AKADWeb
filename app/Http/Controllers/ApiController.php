<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Teachers;
use App\Students;

use Session;
use Illuminate\Support\Facades\Auth;
class ApiController extends Controller
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
    public function login(Request $request){ 
            $credentials = [
                'email' => $request->get('email'),
                'password' => $request->get('password'),
            ];
            $user = User::where('email',$request->get('email'))->get();
            
            $count = Teachers::where('userId',$user[0]->id)->count();
            // return response()->json(['count'=>$count]);
            $userInfo = ($count < 1 ? Students::where('userId',$user[0]->id)->get() : Teachers::where('userId',$user[0]->id)->get());
       
            if(Auth::attempt($credentials))
            {
                return response()->json(['success' => $user,'userInfo' => $userInfo], 200); 
            } 
            else{ 
                return response()->json(['error'=>'Incorrect Username or Password'], 400); 
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
        $userInfo;
        $user = User::create([
            
        ]);
        if($request->get('type') == 'teacher'){
            $userInfo = Teacher::create([
                'fName' => $request->get('fName'),
                'lName' => $request->get('lName'),
                'empId' => $request->get('empId'),
                'bDay' => $request->get('bDay'),
                'userId' => $user.id
            ]);
        }else{
            $userInfo = Student::create([
                'fName' => $request->get('fName'),
                'lName' => $request->get('lName'),
                'studId' => $request->get('empId'),
                'bDay' => $request->get('bDay'),
                'userId' => $user.id,
                'overAllPoints' => 0,
                'pointsBal' => 0,
                'pointsUsed' => 0
            ]);
        }
        return response()->json([
            'success' => $userInfo
        ],200);
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
