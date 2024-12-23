<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        // return dd($request);

        $credentials = $request->only('email' , 'password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();

            // cek role pengguna
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'staff'){
                return redirect()->route('staff.dashboard');
            }
        }

        return back()->withErrors(['email' => 'email atau password salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
