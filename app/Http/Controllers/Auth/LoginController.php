<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) return $this->sendError($validator->errors()->first(), 400);

        if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
            $user = Auth::user();
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.route');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function sendSuccess($message)
    {
        return Response::json([
            'success' => true,
            'message' => $message,
        ], 200);
    }

    public function sendError($message)
    {
        return Response::json([
            'success' => true,
            'message' => $message,
        ], 403);
    }

    public function sendResponse($data, $message)
    {
        return Response::json([
            'success' => true,
            'data' => $data,
            'message' => $message,
        ], 200);
    }
}
