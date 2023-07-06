<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login.index', [
            'title' => 'login',
            'active' => 'login'
        ]);
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'id_poktan'=> 'required',
            'password'=> 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Gagal!!');



    }

    public function logout()
    {
        Auth::logout();
     
        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
     
        return redirect('/');
    }
    
    
    // bisa pakai yang ini

    // public function logout(Request $request)
    // {
    //     Auth::logout();
     
    //     $request->session()->invalidate();
     
    //     $request->session()->regenerateToken();
     
    //     return redirect('/');
    // }


}
