<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
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

			//return Response::json(array('success' => false));
			// dd($credentials);
			return redirect()->back()->with('flash_error','Wrong email/password!');
		}
		
		
		Session::flash('flash_message','Logged in!');
		session(['email' =>  $request->get('email')]); 
 

		// Log::info('*******Logged IN *********'.Input::get('username'));
		return view('dashboard');
	
		
		//return Response::json(array('success' => true));      
	} 
}
