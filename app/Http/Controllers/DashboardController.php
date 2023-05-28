<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function usersIndex()
    {
        return view('admin.users');
    }

    public function categoryIndex()
    {
        return view('admin.category');
    }

    public function rentlog()
    {
        return view('admin.rentlog');
    }
}
