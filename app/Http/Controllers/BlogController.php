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
         
  
     $data = $request->validated();
     // image Uploading

    // 1- get image
    $image = $request->image;
  
    // 2- change Current NAME
        $newImageName = time() . '-' . $image->getClientOriginalName();

    //3- Move image to my project
    $image->storeAs('blogs' , $newImageName, 'public');

    //4- save new name to DB
    $data['image'] = $newImageName;


    // Apporter Valueur ID utilsateur Actuel 
    $data['user_id'] = Auth::user()->id;

    // Faire Ajouter AU BD
      Blog::create($data);
   
       return back()->with('status_blog_store' ,'Blog add with success ;)');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        
        return view('Theme.single-blog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
       
            $categories = Category::get();
            return view('theme.blogs.edit' , compact('categories' ,'blog'));
         
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

    // afficher all user blogs 
    public function myblogs()
    {
        if(Auth::check())
        {
            $data = Blog::where('user_id', Auth::id())->paginate(5);
            return view('theme.blogs.myblogs' , compact('data'));
        }
        else 
        {
            return redirect()->route('theme.index');
        }
     
    }
}
