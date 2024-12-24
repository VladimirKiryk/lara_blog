<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }

    public function login()
    {
        return view('login');
    }

    public function quit()
    {
        return view('quit_profile');
    }

    public function quit_confirm(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('auth.login');
    }

}
