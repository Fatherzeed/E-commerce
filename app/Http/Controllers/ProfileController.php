<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Show the profile view.
     *
     * @return \Illuminate\View\View
     */
    public function profileView()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        // Mendapatkan data pengguna yang sedang login
        $user = Auth::user();

        if ($user) {
            // Data pengguna ada
            Session::put('uuid', $user->uuid);
            Session::put('username', $user->username);
            Session::put('full_name', $user->full_name);
            Session::put('profile_photo', $user->profile_photo);
            Session::put('birth_date', $user->birth_date);
            Session::put('gender', $user->gender);
            Session::put('phone', $user->phone);
            Session::put('email', $user->email);

            // Mengirim data user ke view jika diperlukan
            return view('profilePage.profil', ['user' => $user]);
        } else {
            // Data pengguna tidak ditemukan, redirect ke halaman login
            return redirect()->route('login');
        }
    }


    public function addressView()
    {
        return view('profilePage.address');
    }

    /**
     * Update profile information.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validasi data
        $validatedData = $request->validate([
            'namaUser' => 'required|string|max:255',
            'tgllahirUser' => 'required|date',
            'genderUser' => 'required|string|max:20',
            'emailUser' => 'required|string|max:255',
            'nomorUser' => 'required|string|max:15',
            'userPicture' => 'nullable|image|max:2048', // Validasi untuk file gambar yang tidak wajib
        ]);

        // Mapping form input names to database field names
        $updateData = [
            'full_name' => $validatedData['namaUser'],
            'birth_date' => $validatedData['tgllahirUser'],
            'gender' => $validatedData['genderUser'],
            'email' => $validatedData['emailUser'],
            'phone' => $validatedData['nomorUser'],
        ];

        // Handle file upload hanya jika ada file yang diunggah
        if ($request->hasFile('userPicture')) {
            $file = $request->file('userPicture');
            $hashedName = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('uploads', $hashedName);
            $updateData['profile_photo'] = 'storage/' . $filePath;
        }

        // Update data di tbl_user
        DB::table('tbl_user')->where('id', $user->id)->update($updateData);

        return response()->json(['message' => 'Profile updated successfully']);
    }
}
