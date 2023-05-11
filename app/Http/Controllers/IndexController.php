<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        $data = config('data');
        return view('home', compact('data'));
    }
}
