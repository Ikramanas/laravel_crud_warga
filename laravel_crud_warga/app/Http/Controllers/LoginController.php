<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  
    public function index()
    {
        
        // if ($user = Auth::user()) {
        //     if ($user->level = '1') {
        //         return redirect()->intended('beranda');
        //     }elseif ($user->level = '2') {
        //         return redirect()->intended('kasir');
        //     }
        // }

        return view('login.login');
    }
    public function proses(Request $request)
    {
        dd($request);
        $credential = $request->validate([
                            'email' => 'required',
                            'password' => 'required'
                        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
    
            return redirect()->intended('dashboard');
        }
    }



}