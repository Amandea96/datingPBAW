<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/homePage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {	//if(!($this->middleware('guest')))
		//{$redirectTo = '/register';}
        $this->middleware('guest');
    }

	
	
	 protected function edit(array $data){
		$redirectTo = '/register'; 
		 
	 }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
			'gender' => 'required|string|max:255',
			'prefM' => 'required|string|max:255',
			'age' => 'required|string|max:255',
			'complex' => 'nullable|string|max:255',
			'ecolor' => 'nullable|string|max:255',
			'hcolor' => 'nullable|string|max:255',
			'city' => 'required|string|max:255',
			'prefW' => 'required|string|max:255',
			'nation' => 'required|string|max:255',
			'role' => 'nullable|string|max:255',
			'height' => 'nullable|integer|between:110,230',
			'image' => 'required|max:10000',
			'description' => 'nullable|max:10000',
			
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {	
	
	
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
			'gender' => $data['gender'],
			'prefM' => $data['prefM'],
			'age' => $data['age'],
			'complex' => $data['complex'],
			'ecolor' => $data['ecolor'],
			'hcolor' => $data['hcolor'],
			'city' => $data['city'],
			'prefW' => $data['prefW'],
			'nation' => $data['nation'],
            'password' => Hash::make($data['password']),
			//'role' => $data['role'],
			'height' => $data['height'],
			'image' => $data['image'],
	'description' => $data['description'],
			
        ]);
    }
}
