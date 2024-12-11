<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());

      $data =  $request->validate([
            'email'=> 'required|email|unique:subscribers,email' , 
        ]);

       
        Subscriber::create($data);
        return back()->with('status', '    Subscribed Succesfully');
    }
}
