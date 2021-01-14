<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.index');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }
    public function profile()
    {
        return view('dashboard.profile');
    }
    public function error()
    {
        return view('dashboard.404');
    }
    public function icon()
    {
        return view('dashboard.basic-table');
    }
    public function blank()
    {
        return view('dashboard.blank');
    }
    public function fontawesome()
    {
        return view('dashboard.fontawesome');
    }
    public function map()
    {
        return view('dashboard.map-google');
    }
}
