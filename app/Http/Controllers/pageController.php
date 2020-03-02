<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactForm;
use Session;

class pageController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function contact()
    {
        return view('/contactus');
    }

    public function sendContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
        ]);

        Mail::to('admin@test.com')->send(new ContactForm($request));
    }

    public function contactResponse(Request $request)
    {
        return view('contact-response');
    }
}