<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  
    public function index()
    {
        
        if ($user = Auth::user()) {
            if ($user->level = '1') {
                return redirect()->intended('beranda');
            }elseif ($user->level = '2') {
                return redirect()->intended('kasir');
            }
        }

        return view('login.login');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only(['username','password']);
       
        // dd($credential);
        if (Auth::attempt($credential)) {
           $user = Auth::user();
           if ($user->level=='1') {
            $request->session()->regenerate();
            return redirect()->route('warga.index');
           }
           elseif ($user->level=='2') {
            $request->session()->regenerate();
            return redirect()->route('warga.index');
           }
        }

        return redirect()->intended('/')->withErrors('login gagal');
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }
}