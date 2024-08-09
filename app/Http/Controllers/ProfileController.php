<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function profileView() {
        $username = Session::get('username');
        $uuid = Session::get('uuid');

        return view('profilePage.profil', compact('username', 'uuid'));
    }

    public function addressView(){
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
        // Validasi input
        $validatedData = $request->validate([
            'namaUser' => 'required|string|max:255',
            'tgllahirUser' => 'required|date',
            'genderUser' => 'required|string|max:10',
            'emailUser' => 'required|email|max:255',
            'nomorUser' => 'required|string|max:15',
            'userPicture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Handle file upload
        if ($request->hasFile('userPicture')) {
            $file = $request->file('userPicture');
            $hashedName = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('public/images', $hashedName);
            $validatedData['userPicture'] = Storage::url($filePath); // Store the URL path of the image
        }

        // Check the validated data
        dd($validatedData);

        // Get the UUID from the session
        $uuid = Session::get('uuid');

        // Update the data in the database
        DB::table('tbl_user')->where('uuid', $uuid)->update([
            'nama_lengkap' => $validatedData['namaUser'],
            'tanggal_lahir' => $validatedData['tgllahirUser'],
            'gender' => $validatedData['genderUser'],
            'email' => $validatedData['emailUser'],
            'nomor' => $validatedData['nomorUser'],
            'profile' => $validatedData['userPicture'] ?? null,
        ]);

        return response()->json(['message' => 'Profile updated successfully']);
    }
}
