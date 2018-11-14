<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Session;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        /*$this->validate($request, [
          'credit-card-number' => 'required|ccn',
          'credit-card-date' => 'required|ccd',
          'credit-validation-code' => 'required|cvc',
        ]);*/

        return Validator::make($data, [
            'lastname'      => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:6|confirmed',
            'address'       => 'required|string|max:255',
            'dateofbirth'   => 'required|date|date_format:Y-m-d',
            'membership'    => 'required|string|max:255',
            'numbercard'    => 'required|ccn',
            'typecard'      => 'required|string|max:255',
            'expdatecard'   => 'required|ccd',
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
        $user = User::create([
            'firstname'     => $data['firstname'],
            'lastname'      => $data['lastname'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
            'address'       => $data['address'],
            'dateofbirth'   => $data['dateofbirth'],
            'membership'    => $data['membership'],
            'numbercard'    => $data['numbercard'],
            'typecard'      => $data['typecard'],
            'expdatecard'   => $data['expdatecard']
        ]);

        Session::put('success', 'User successfully created.');
        return $user;
    }
}
