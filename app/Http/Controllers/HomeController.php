<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {

        $username = Session::get('username');
        $uuid = Session::get('uuid');

        

        // return view('home/indexhome', compact('accessToken', 'refreshToken', 'name'));
        return view('home/indexhome', compact('username', 'uuid'));
        // return view('home/indexhome');
    }

}
