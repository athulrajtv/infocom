<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;
use App\Models\Connect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    use \Illuminate\Foundation\Validation\ValidatesRequests;
    public function sendContactMail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5|max:100',
            'email' => 'required|email',
            'phone' => 'required|max:15',
            'message' => 'required|min:10|max:255',
        ]);

        Connect::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        $adminMail='eyednextltd@gmail.com';
        $response = Mail::to($adminMail)->send(new WelcomeEmail($request->all()));

        if($response)
        {
            return back()->with('success', 'Thank you for contacting us.');
        }
        return back()->with('error', 'Unable to submit contact form. Please try again.');
        
    }
}