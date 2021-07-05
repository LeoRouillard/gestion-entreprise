<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

use Socialite;

class SocialiteController extends Controller
{
    public function loginRegister () {
    	return view("socialite.login-register");
    }

    public function redirect (Request $request) {
        $provider = $request->provider;
        return Socialite::driver($provider)->redirect();
        abort(404);
    }

    public function callback (Request $request) {
        $provider = $request->provider;

        $data = Socialite::driver($request->provider)->user();
        $email = $data->getEmail();
        $name = $data->getName();
        $user = User::where("email", $email)->first();

        if (isset($user)) {
            $user->name = $name;
            $user->save();
        } else {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt("motdepasse")
            ]);
        }

        auth()->login($user);

        if (auth()->check()) return redirect(route('home'));
        abort(404);
    }
}