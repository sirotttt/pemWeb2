<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    function index()
    {
        return view('pages.auth.login');
    }

    function login(Request $request)
    {
        $validateUser = $request->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);

        // cek login, jika berhasil maka login

        if(Auth::attempt($validateUser)){
            return redirect()->to('/tipemobil');
        } else{
            return redirect()->to('/login');
        }
    }
    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/login');
    }
}
