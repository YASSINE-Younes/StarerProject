<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    function index()
    {
        $blogs = Blog::paginate(4);
        return view('Theme.index', compact('blogs'));
    }

    function category($id)
    {
      
        $category_Name = Category::find($id)->name;
        $blogs_catgory = Blog::where('category_id',$id)->paginate(2);
        return view('Theme.category', compact('blogs_catgory' ,'category_Name'));
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
