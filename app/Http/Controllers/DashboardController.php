<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard.index');
    }

    public function profile()
    {
        return view('pages.admin.dashboard.profile');
    }
}
