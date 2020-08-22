<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Teachers;
use App\Students;

use Session;
use DB;
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

    public function checker(Request $request){
        $user = User::where('api_token',substr($request->header('Authorization'),7))->get();
            // dd(substr($request->header('Authorization'),7));
            // dd($user[0]->id);
            $count = Teachers::where('userId',$user[0]->id)->count();
            if($count<1){
                $userDetails = DB::table('users')
                            ->join('students','students.userId','=','users.id')
                            ->select([
                                'email', 'email_verified_at','api_token','hairId','bodyId',
                                'headId','eyesId','noseId','lipsId','students.*'
                            ])
                            ->where('email',$user[0]->email)
                            ->get();
            }else{
                $userDetails = DB::table('users')
                            ->join('teachers','teachers.userId','=','users.id')
                            ->select([
                                'email', 'email_verified','api_token','hairId','bodyId',
                                'headId','eyesId','noseId','lipsId','teachers.*'
                            ])
                            ->where('email',$user[0]->email)
                            ->get();
            }
            return response()->json(['user' => $userDetails[0]], 200); 
    }
    public function login(Request $request){ 
            $credentials = [
                'email' => $request['email'],
                'password' => $request['password'],
            ];
            
            $user = User::where('email',$request['email'])->get();
            
            // $count = Teachers::where('userId',$user[0]->id)->count();
            // if($count<1){
            //     $userDetails = DB::table('users')
            //                 ->join('students','students.userId','=','users.id')
            //                 ->select([
            //                     'email', 'email_verified_at','api_token','hairId','bodyId',
            //                     'headId','eyesId','noseId','lipsId','students.*'
            //                 ])
            //                 ->where('email',$request['email'])
            //                 ->get();
            // }else{
            //     $userDetails = DB::table('users')
            //                 ->join('teachers','teachers.userId','=','users.id')
            //                 ->select([
            //                     'email', 'email_verified','api_token','hairId','bodyId',
            //                     'headId','eyesId','noseId','lipsId','teachers.*'
            //                 ])
            //                 ->where('email',$request['email'])
            //                 ->get();
            // }
            if(Auth::attempt($credentials))
            {
                return response()->json(['api_token' => $user[0]->api_token], 200); 
            } 
            else{ 
                return response()->json(['error'=>'Incorrect Username or Password'], 401); 
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
