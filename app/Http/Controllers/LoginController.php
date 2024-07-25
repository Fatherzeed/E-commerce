<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;

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
            ->first();

        if ($user && Hash::check($password, $user->password)) {
            Session::put('uuid', $user->uuid);
            Session::put('username', $user->username);

            return response()->json([
                'status' => 'success',
                'message' => 'Login berhasil',
                'redirect_url' => route('home')
            ]);
        } else {
            return response()->json([
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

    public function registrasi(Request $request)
    {
        $usernameRegist = $request->input('regUsername');
        $passwordRegist = $request->input('regPassword');
        $emailRegist = $request->input('regEmail');

        $hashedPassword = Hash::make($passwordRegist);

        $lastUuid = DB::table('tbl_user')->orderBy('uuid', 'desc')->value('uuid');
        $newUuid = str_pad((int)$lastUuid + 1, 4, '0', STR_PAD_LEFT);

        try {
            DB::table('tbl_user')->insert([
                'username' => $usernameRegist,
                'uuid' => $newUuid,
                'password' => $hashedPassword,
                'email' => $emailRegist,
                'role_id' => 2
            ]);

            return response()->json(['message' => 'User registered successfully!'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to register user: ' . $e->getMessage()], 500);
        }

    }


}
