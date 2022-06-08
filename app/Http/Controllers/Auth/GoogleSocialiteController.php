<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;

class GoogleSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        $socialuser = Socialite::driver('google')->stateless()->user();


        $userCount = User::where('email', '=', $socialuser->getEmail())->count();

        if (!$userCount) {
            $user = User::firstOrCreate([
                'first_name'  => $socialuser->getName(),
                'email'       => $socialuser->getEmail(),
                'social_id'   => $socialuser->getId(),
                'social_type' => "GOOGLE",
            ]);
            $data = Auth::login($user);

            return redirect('/user/profile');
        } else {
            $user = User::where('email', '=', $socialuser->getEmail())->first();
            Auth::login($user);

            return redirect('/');
        }
    }
}
