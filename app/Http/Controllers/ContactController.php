<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
   
       $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subjuct'=>'required',
             'message'=>'required',
        ]);

        Contact::create($data);
        return back()->with('status_message_contact', 'Message sent successfully YS!');
   
    
    }
}
