<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    function index()
    {
        $blogs = Blog::paginate(2);
        return view('Theme.index', compact('blogs'));
    }

    function category()
    {
        return view('Theme.category');
    }

    function contact()
    {
        return view('Theme.contact');
    }
    // ========================================
    function singleBlog()
    {
        return view('Theme.single-blog');
    }

 

     
}
