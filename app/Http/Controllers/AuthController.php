<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function login(Request $request)
    {
    	if(Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ])){
            $user = User::where('email', $request->email)->first();
            return view('dashboard')->with('user', $user);
        }
        else
        {
            return redirect()->back();
        }
    }
}
