<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function show(){
        return view('login.show');
    }

    public function login(Request $request){
        $email = $request->email;
        $password  = $request->password;
        $cardentials = ['email' => $email, 'password' => $password];
        if(Auth::attempt($cardentials)){
            $request->session()->regenerate();
            return to_route('formateurs.index');
        }else{
            return back()->withErrors([
                'email' => 'Emial ou mot de pass incorrect'
            ])->onlyInput('email');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return to_route( 'login.show')->with('success', 'Vous étes bien déconnecté.');
    }

}
