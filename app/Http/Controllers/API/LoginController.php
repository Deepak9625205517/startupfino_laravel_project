<?php


namespace App\Http\Controllers\API;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Events\LoginHistory;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers, ApiResponser;

    protected $message;
  	protected $messages;
  	protected $data;
  	protected $status;
  	protected $code;

    public function __construct($message =  '', $messages = array(), $data = array(), $code = 200, $status = 1)
    {
        $this->message = $message;
        $this->messages = $messages;
        $this->data = $data;
        $this->status = $status;
        $this->code = $code;
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'is_admin' => 2)))
        {
            if (auth()->user()->is_admin != '2') {
                
                $this->message = 'Sorry! You have no permission to login.';
                $this->messages = [
                    'auth' => 'Sorry! You have no permission to login.',
                ];
                $this->status = 0;
                $this->code = 422;
                return $this->apiResponse(
                    $this->message,
                    $this->messages,
                    $this->data,
                    $this->code,
                    $this->status
                );
            }

            $user = Auth::user();

            event(new LoginHistory($user));

            $this->message = 'You have successfully loged in.';
            $this->data = compact('user');
            $this->messages = [
                'auth' => 'You have successfully loged in.',
            ];

            return $this->apiResponse(
                $this->message,
                $this->messages,
                $this->data,
                $this->code,
                $this->status
            );

        }else{
            $this->message = 'Oppes! You have entered invalid credentials';
            $this->messages = [
                'auth' => 'Sorry! You have no permission to login.',
            ];
            $this->status = 0;
            $this->code = 422;
            return $this->apiResponse(
                $this->message,
                $this->messages,
                $this->data,
                $this->code,
                $this->status
            );
        }
    }

    // public function logout()
    // {
    //     if(!$user = auth()->user()) {
    //         $this->message = 'Logout';
    //         $this->messages = [
    //             'auth' => "Your have alredy logout",
    //         ];
    //         return $this->apiResponse(
    //             $this->message,
    //             $this->messages,
    //             $this->data,
    //             $this->code,
    //             $this->status
    //         );
    //     }

    //     // $user->tokens->each(function ($token, $key) {
    //     //     $token->delete();
    //     // });

    //     $this->message = 'Logout';
    //     $this->messages = [
    //         'auth' => "You have Successfully logout",
    //     ];

    //     return $this->apiResponse(
	// 		$this->message,
	// 		$this->messages,
	// 		$this->data,
	// 		$this->code,
	// 		$this->status
	// 	);
    // }
}
