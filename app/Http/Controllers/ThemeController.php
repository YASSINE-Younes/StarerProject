<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    function index()
    {
        $blogs = Blog::latest()->paginate(3);
        $recent_blogs_slider = Blog::latest()->take(2)->get();
   
        return view('Theme.index', compact('blogs' ,'recent_blogs_slider'));
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
    

 

     
}
