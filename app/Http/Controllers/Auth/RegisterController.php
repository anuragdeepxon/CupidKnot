<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function register(Request $request)
    {
        $input = $request->all();

        $this->validator($request->all())->validate();

        $input = $request->all();

        if (!($request->has('expected_occupation'))) {
            $input['expected_occupation'] = null;
        }

        if (!($request->has('expected_family_type'))) {
            $input['expected_family_type'] = null;
        }

        if (!($request->has('is_manglik'))) {
            $input['is_manglik'] = null;
        }

        if (!($request->has('expected_is_manglik'))) {
            $input['expected_is_manglik'] = null;
        }

        if (!($request->has('expected_income_low'))) {
            $input['expected_income_low'] = null;
        }

        if (!($request->has('expected_income_high'))) {
            $input['expected_income_high'] = null;
        }

        if (!($request->has('family_type'))) {
            $input['family_type'] = null;
        }

        if (!($request->has('occupation'))) {
            $input['occupation'] = null;
        }

        event(new Registered($user = $this->create($input)));

        $this->guard()->login($user);


        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],

            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'dob' => ['nullable', 'date'],
            'gender' => ['nullable', 'string'],
            'annual_income' => ['nullable', 'integer'],
            'occupation' => ['nullable', 'string'],
            'family_type' => ['nullable', 'string'],
            'is_manglik' => ['nullable'],
            'expected_income_low' => ['nullable', 'integer'],
            'expected_income_high' => ['nullable', 'integer'],
            'expected_occupation' => ['nullable'],
            'expected_family_type' => ['nullable'],
            'expected_is_manglik' => ['nullable']
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

        // dd($data);
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'dob' => Carbon::parse($data['dob'])->format('Y-m-d'),
            'gender' => $data['gender'],
            'annual_income' => $data['annual_income'],
            'occupation' => $data['occupation'],
            'family_type' => $data['family_type'],
            'is_manglik' => $data['is_manglik'],
            'expected_income_low' => $data['expected_income_low'],
            'expected_income_high' => $data['expected_income_high'],
            'expected_occupation' => json_encode($data['expected_occupation']),
            'expected_family_type' => json_encode($data['expected_family_type']),
            'expected_is_manglik' => $data['expected_is_manglik'],
        ]);
    }
}
