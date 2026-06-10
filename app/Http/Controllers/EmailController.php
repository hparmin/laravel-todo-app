<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        return view('mail.index');
    }

    public function send(Request $request)
    {
        $request->validate([
            'text' => 'required|min:10'
        ]);
        $the_emial_text = $request->text;
        Mail::raw($the_emial_text,function($the_emial_text) {
            $the_emial_text->to('hp.armin@yahoo.com')->subject('Laravel');
        });
        echo "Done";
    }
}
