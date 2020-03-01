<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
    //    dd('hola');
        $this->validate($request, [
            'name' => 'required|string',
            // 'subject' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|min:6',
        ]);

        /*
          Add mail functionality here.

        */

// return view('/');
        // return response()->json(null, 200);
        return response()->json(['Company Created Successfully']);
    }
}