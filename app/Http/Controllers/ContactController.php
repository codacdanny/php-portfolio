<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
   
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
    
        $details = $request->only(['name', 'email', 'subject', 'message']);
    
        // Send email to the address configured in .env
        Mail::to(config('mail.from.address'))->send(new ContactMail($details));
    
        return back()->with('success', 'Your message has been sent successfully!');
    }
}