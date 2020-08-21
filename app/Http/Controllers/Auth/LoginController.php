<?php

namespace App\Http\Controllers\Auth;

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

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($request->all(), [
			'email' => 'required|max:255|email',
			'password' => 'required|min:3|confirmed',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	protected function create(array $data)
	{
		return User::create([
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}
	public function login(){ 
		return view('index');
	}
	public function logout(Request $request)
	{
		$request->session()->forget('id');
		$request->session()->forget('email');
		auth()->logout();
		return redirect('/')->with('flash_error','Successfully logged out!');
	}

	public function authenticate(Request $request)
	{

		$credentials = [
			'email' => $request->get('email'),
			'password' => $request->get('password'),
		];
   
		if(!Auth::attempt($credentials))
		{
			Session::flash('flash_error','Wrong email/password!');
			return redirect()->back()->with('flash_error','Wrong email/password!');
		}
		
		
		Session::flash('flash_message','Logged in!');
		$user = User::where('email',$request->get('email'))->get();
		$userInfo = (Teachers::where('userId',$user[0]->id)->count()==1 ? 
					Teachers::where('userId',$user[0]->id)->get() : 
					Students::where('userId',$user[0]->id)->get());
		$classData = DB::table('classrooms')
				->join('class_details','class_details.classId','=','classrooms.id')
				->join('students','class_details.studId','=','students.id')
				->select([
					'classrooms.className'
				])
				->where('status','=','active')
				->where('students.id','=',$userInfo[0]->id)
				->get();
				// dd($classData[0]->className);
		session(['email' =>  $request->get('email'),'userId' => $user[0]->id,'userInfo'=>$userInfo,'className'=>$classData[0]->className]); 
	
		return view('dashboard');
	
		
		//return Response::json(array('success' => true));      
	} 
}
