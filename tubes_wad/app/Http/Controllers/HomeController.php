<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    

    public function client_feedback()
    {
        return view('/layouts/client_feedback');
    }

        public function dokter_rekammedis()
    {
        return view('/layouts/dokter_rekammedis');
    }

    
    
}
