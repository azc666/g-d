<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
// use App\Mail;
use App\Mail\ContactForm;
use Session;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contactus');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        return view('contactus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'email'   => 'required|email',
            'subject'  => 'required',
            'message'  => 'required',
        ]);

        $email = $request->email;
        // $key = "z0MOIqtO77nXns5s3nJ34"; // alleng-d.com
        $key = env('EMAILVERIFYLIST_KEY');

        $url2 = "https://apps.emaillistverify.com/api/verifyEmail?secret=" . $key . "&email=" . $email;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        // dd($response);
        // echo $response;
        curl_close($ch);



        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        $secret = env('RECAPTCHA_SECRET');
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=" . $_POST['g-recaptcha-response'];
        $verify = json_decode(file_get_contents($url));

//   dd($response);

        if ($verify->success && $response==="ok") {


            Mail::to($email)->send(new ContactForm($request));

            return view('contact-response', compact('name', 'email', 'subject', 'message'));
        } else {
            // Session::flash('alert', "Special message goes here");
            // dd($verify);
            $verify = session()->put($verify->success, false);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}