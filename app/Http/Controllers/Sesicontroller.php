<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Sesicontroller extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin') {
                return redirect('/admin/beranda');
            }elseif (Auth::user()-> role == 'pendaftaran') {
                return redirect('/admin/pendaftaran');
            }elseif (Auth::user()-> role == 'poli') {
                return redirect('/admin/poli');
            } 
        } else {
            return redirect('')->withErrors('username dan password salah')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}