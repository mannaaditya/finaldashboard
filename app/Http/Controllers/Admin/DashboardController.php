<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin_login()
    {
        return view('auth.login');
    }
    public function admindashboard()
    {
        return view('Admin.add.index');
    }
}
