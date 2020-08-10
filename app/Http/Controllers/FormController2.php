<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Response;
use App\Mail\ContactForm;
use Session;
use nickdnk\ZeroBounce\Email;
use nickdnk\ZeroBounce\Result;
use nickdnk\ZeroBounce\ZeroBounce;

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
    public function store(Request $request, Response $response)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'email'   => 'required|email',
            'subject'  => 'required',
            'message'  => 'required',
        ]);

        $email = $request->email;
        // require_once("zerobounce.php");
        // You can modify the timeout using the second parameter. Default is 15.
        require_once("zerobounce.php");

        $zba = new ZeroBounceAPI(env('ZEROBOUNCE_API_KEY'));

        $key = env('ZEROBOUNCE_API_KEY');

        $result = $zba->validate($email);
        // $handler = new ZeroBounce($key, 15);

        // $zbemail = new Email(
            // The email address you want to check
            // $email,
            // and if you have it, the IP address - otherwise null or omitted
            // '123.123.123.123'
        // );

        // try {
           // Validate the email
            // $result = $handler->validateEmail($zbemail);

            if ($result->getStatus() === Result::STATUS_VALID) {
                // All good
                $response = "OK";
            }
        // } catch (\nickdnk\ZeroBounce\APIError $exception) {
            // Something happened. Perhaps a bad API key or insufficient credit.
        // }

        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        $secret = env('RECAPTCHA_SECRET');
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=" . $_POST['g-recaptcha-response'];
        $verify = json_decode(file_get_contents($url));

        if ($verify->success && $response==="OK") {

            Mail::to($email)->send(new ContactForm($request));

            return view('contact-response', compact('name', 'email', 'subject', 'message'));
        } else {

            $verify = session()->put($verify->success, false);

            return redirect()->back()->withInput()->with('error', 'This email address cannot be verified. Perhaps a typo?');
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