<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\APIBaseController;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends APIBaseController
{
    public function profile()
    {
        return view('auth.update');
    }

    public function profile_update(Request $request)
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

        $user = $this->update($input);

        return  redirect()->to('/');
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
    protected function update(array $data)
    {

        $authUser = Auth::user();

        $user = User::where('id', '=', $authUser->id)->first();

        return $user->update([
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


    public function index()
    {
        $usersCount = User::all()->count();
        if (!$usersCount) return $this->sendError('Users not found');

        $authUser = Auth::user();

        $users = User::all()->except($authUser->id);;

        foreach ($users as $user) {

            $percentage = 0;

            if (($authUser->expected_is_manglik != null) && ($user->is_manglik != null)) {
                if ($authUser->expected_is_manglik == $user->is_manglik || $authUser->expected_is_manglik == 'both') {
                    $percentage = $percentage + 100;
                }
            }

            if ((json_decode($authUser->expected_occupation) != null) && ($user->occupation != null)) {
                if (in_array($user->occupation, json_decode($authUser->expected_occupation))) {
                    $percentage = $percentage + 100;
                }
            }
            if ((json_decode($authUser->expected_family_type) != null) && ($user->family_type != null)) {
                if (in_array($user->family_type, json_decode($authUser->expected_family_type))) {
                    $percentage = $percentage + 100;
                }
            }

            if (!(($authUser->expected_income_low != null) && ($authUser->expected_income_high != null) && ($user->annual_income != null))) {
                if (($user->annual_income >= $authUser->expected_income_low) && ($user->annual_income <= $authUser->expected_income_high)) {
                    $percentage = $percentage + 100;
                }
            }


            $percentage = $percentage + 100; // Adding extra 25% for Human Match

            $percentage = $percentage / 5;

            $user->percentage = $percentage;
        }
        return $this->sendResponse($users, 'Users retrieved successfully');
    }
}
