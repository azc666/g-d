<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use axios;
use App\Mail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        dd('oh yeah');
        $temp = 2 + 2;
        echo ('<br>' . $temp);
        return response()->json([
            'message' => 'New post created'
        ]);
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

    public function contact()
    {
         dd('hola');
         return view('contactus');

    }

    public function sendContact(Request $request)
    {
        // dd('oh yeah');
        // $temp = 2+2;
        // echo('<br>'.$temp);
        // return view('/aboutus');
        // Mail::to('admin@test.com')->send(new ContactForm($request));
        // return (['message' => 'task was successful']);

        return response()->json([
            'message' => 'New post created'
        ]);

    }
}