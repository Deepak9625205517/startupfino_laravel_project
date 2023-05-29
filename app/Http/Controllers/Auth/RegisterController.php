<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function signup(Request $request)
    {
        $code = (isset($request->refferal_code) && !empty($request->refferal_code)) ? $request->refferal_code : '';
       
        return view('front.pages.signup', compact('code'));
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|same:password_confirmation',
            'mobile_number' => 'required|min:10'
        ]);
    
        if(isset($request->refferal_code) && !empty($request->refferal_code))
        {
            $codeCheack = User::where('refferal_code', $request->refferal_code)->first();
        }

        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        $input['refferal_code'] = $this->generateOtp();
        $input['reference_by']  = (isset($codeCheack) && !empty($codeCheack)) ? $request->refferal_code : '';
        $input['is_admin'] = 2;
    
        $user = User::create($input);
        $user->assignRole(['Customer']);

        return response()->json([
            'success' => 'Your Registration has been Successfully Created.',
        ]);
    }

    protected function generateOtp()
    {
        $otp = mt_rand(100000,999999);
        return $otp;
    }
}
