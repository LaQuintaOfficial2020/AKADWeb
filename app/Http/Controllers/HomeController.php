<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
use App\Teachers;
use App\Students;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use DB;
use Log;
use Response;
use Illuminate\Http\Request;
use Session;
// use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

    public function signup(Request $request)
    {
        $user = User::create([
            'email'	=>	$request->email,
            'password'	=>	bcrypt($request->password)
        ]);
        // dd( $user);
        if($request->userType == 'teacher'){
            Teachers::create([
                'fName' => $request->fname,
                'lName' => $request->lname,
                'userId' => $user->id
            ]);
        }else{
            Students::create([
                'fname' => $request->fname,
                'lname' => $request->lname,
                'userId' => $user->id,
                'studId' => 'test',
                'overAllPoints' => 10,
                'pointsBal' => 10,
                'pointsUsed' => 0,
                'bDay' => '01/01/2001'
            ]);
        }
        return redirect('/AvatarCreation')->with('flash_message','Sign Up success!');
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
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
