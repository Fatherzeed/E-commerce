<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
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
        return view('home/indexhome');
    }

}
