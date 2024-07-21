<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

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
        $username = $request->input('username');
        $password = $request->input('password');
    
        $user = DB::table('tbl_user')
            ->where('username', $username)
            ->where('password', $password)
            ->first();
    
        if ($user) {
            Session::put('uuid', $user->uuid);
            Session::put('username', $user->username);
    
            return Response::json([
                'status' => 'success',
                'message' => 'Login berhasil',
                'redirect_url' => route('home')
            ]);
        } else {
            return Response::json([
                'status' => 'error',
                'message' => 'Username atau password salah'
            ], 401);
        }
    }

    public function logout()
    {
        Session::forget('uuid');
        Session::forget('username');
        Auth::logout();
        return redirect('/')->with('success', 'Anda telah berhasil logout.');
    }


}
