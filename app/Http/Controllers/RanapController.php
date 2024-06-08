<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RanapController extends Controller
{
    public function index()
    {
        return view('ranap');
    }
}
