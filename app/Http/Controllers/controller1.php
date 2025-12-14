<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller1 extends Controller
{
    function index()
    {
        $nama = "haidar";
        return view('home', ['nama' => $nama]);
    }
}
