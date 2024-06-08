<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Form_Add_DataController extends Controller
{
    public function index()
    {
        return view('form_add');
    }
}
