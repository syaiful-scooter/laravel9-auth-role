<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppstackController extends Controller
{
    //

    public function index()
    {
        return view('appstackpage.blank', ['title' => "Halaman Tes"]);
    }
}
