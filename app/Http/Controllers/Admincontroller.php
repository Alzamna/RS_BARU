<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admincontroller extends Controller
{
    function index()
    {
        return view ('login');
    }
    function admin()
    {
        return view ('beranda');
    }
    function pendaftaran()
    {
        return view ('beranda');
    }
    function poli()
    {
        return view ('beranda');
    }
}
