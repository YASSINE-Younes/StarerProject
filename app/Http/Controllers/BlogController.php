<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::check())
        {
            $categories = Category::get();
            return view('theme.blogs.create' , compact('categories'));
        }
        else 
        {
          return redirect()->route('login');
        }
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        // تحقق من البيانات المدخلة
  
     $data = $request->validated();
     // image Uploading
    // 1- get image
    // 2- change Current NAME
    //3- Move image to my project
    //4- save new name to DB

    //  $data['user_id'] = Auth::user()->id;
    // Blog::create($data);
   
    //   return back()->with('status' ,'add with success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
