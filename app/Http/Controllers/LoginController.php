<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // $sessionLogin = session('loggedInUser');
        // $sessionLogin['username'] ?? exit(header("Location: " . route('login')));
        // $username = $sessionLogin['username'];
        // $accessToken = Session::get('access_token');
        // $refreshToken = Session::get('refresh_token');
        // $name = Session::get('loggedInUser') ?? exit(header("Location: " . route('login')));

        

        // return view('home/indexhome', compact('accessToken', 'refreshToken', 'name'));
        return view('user.login');
    }


    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        


        


    }

    public function logout()
    {
        if (session()->has('loggedInUser')) {
            session()->pull('loggedInUser');
            Auth::logout();
            return redirect('/');
        }
    }


}
