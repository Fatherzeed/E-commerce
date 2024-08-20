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



        // return view('homePage/indexhome', compact('accessToken', 'refreshToken', 'name'));
        return view('userPage.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        // Cek apakah user ada di tbl_user dan autentikasi berhasil
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            $request->session()->regenerate();

            // Ambil user yang baru saja login
            $user = Auth::user();
            Session::put('uuid', $user->uuid);
            Session::put('username', $user->username);

            return response()->json([
                'status' => 'success',
                'message' => 'Login berhasil',
                'redirect_url' => route('home')
            ]);
        } else {
            // Jika autentikasi gagal
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


        $existingUser = DB::table('tbl_user')->where('username', $usernameRegist)->first();
        if ($existingUser) {
            return response()->json(['error' => 'Username already exists'], 409);
        }


        $existingEmail = DB::table('tbl_user')->where('email', $emailRegist)->first();
        if ($existingEmail) {
            return response()->json(['error' => 'Email already exists'], 409);
        }


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
