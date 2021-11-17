<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth');
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function GoogleCallback()
    {
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name'=> $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verified_at' => Carbon::now(),
        ];
        $user = User::firstOrCreate(['email' => $data['email']], $data);
        Auth::login($user, true);
        return redirect()->route('home');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
