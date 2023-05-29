<?php

namespace App\Http\Controllers\Auth;

use App\Events\LoginHistory;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function login()
    // {
    //     return view('auth.login');
    // }

    public function loginForm(Request $request)
    {   
        $input = $request->all();
        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
     
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'is_admin' => 1)))
        {
            if (auth()->user()->is_admin == '1') {
                $user = Auth::user();

                event(new LoginHistory($user));
                
                $request->session()->flash('alert-success', 'You have successfully loged in.');
                return redirect()->route('dashboard');
            }else{
                $request->session()->flash('alert-danger', 'Sorry! You have no permission to login.');
                return redirect()->back();
            }
        }else{
            $request->session()->flash('alert-danger', 'Oppes! You have entered invalid credentials');
            return redirect()->back();
        }
          
    }

    public function customerLogin(Request $request)
    {   
        $input = $request->all();
        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
         
        $checkActiveUser = User::where('email', $request->email)->where('status', 1)->whereNull('deleted_at')->first();
        if(!empty($checkActiveUser) && isset($checkActiveUser))
        {
    
                if(auth()->attempt(array('email' => $request->email, 'password' => $request->password, 'is_admin' => 2)))
                {
                    if (auth()->user()->is_admin == '2') {
                        // $request->session()->flash('alert-success', 'You have successfully loged in.');
                        // return redirect()->route('dashboard');
                        $user = Auth::user();

                        event(new LoginHistory($user));

                        return response()->json([
                            'success' => 'You have successfully loged in.',
                        ]);
                    }else{
                        // $request->session()->flash('alert-danger', 'Sorry! You have no permission to login.');
                        // return redirect()->back();
                        return response()->json([
                            'error' => 'Sorry! You have no permission to login.',
                        ]);
                    }
                }else{
                    // return redirect()->back()->with(['alert-danger' => 'Oppes! You have entered invalid credentials']);
                    return response()->json([
                        'error' => 'Sorry! Oppes! You have entered invalid credentials',
                    ]);
                }

                $user = Auth::user();

                    event(new LoginHistory($user));
                    return response()->json([
                        'success' => 'You have successfully loged in.',
                    ]);

        }else{
            return response()->json([
                'error' => 'Sorry! Your Account has Been Deactivated Please Contact To Support Team',
            ]);
        }        

        
    }    
}
