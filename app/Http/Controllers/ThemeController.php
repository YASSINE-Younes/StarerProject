<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    function index()
    {
        return view('Theme.index');
    }

    function category()
    {
        return view('Theme.category');
    }

    function contact()
    {
        return view('Theme.contact');
    }
}
