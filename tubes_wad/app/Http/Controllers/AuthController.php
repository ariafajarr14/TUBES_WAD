<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //


    function login(){
        return view('UserAuth.login');
    }

    function register(){
        return view('UserAuth.register');
    }

    function create(Request $request){
        $request->validate([
            'nama'=>'required',
            'username'=>'required|unique:users',
            'password'=>'required|min:6|max:15',
            'alamat'=>'required',
            'jenisKelamin'=>'required',
            ]);

        $user = new User();
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->alamat = $request->alamat;
        $user->jenisKelamin = $request->jenisKelamin;
        $query = $user->save();

        if($query){
            return back()->with('sukses', 'Kamu berhasil registrasi');
        }else{
            return back()->with('gagal', 'Kamu gagal registrasi');
        }
    }
}
