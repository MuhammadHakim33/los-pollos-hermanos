<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginFormAdmin()
    {
        return view('admin.login');
    }

    public function showRegistrationFormAdmin()
    {
        return view('admin.signup');
    }

    public function AdminDashboard()
    {
        return view('admin.dashboard');
    }
}
