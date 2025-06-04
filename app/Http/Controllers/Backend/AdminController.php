<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function forgotPassword()
    {
        return view('admin.auth.forgot-password');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
