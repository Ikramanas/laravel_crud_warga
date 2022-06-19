<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  
    public function index()
    {
        if ($user = Auth::user) {
            if ($user->level = '1') {
                return redirect()->intended('beranda');
            }elseif ($user->level = '2') {
                return redirect()->intended('kasir');
            }
        }

        return view('login.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')]);
        if (Auth::check()) {
            # code...
            return redirect('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

}