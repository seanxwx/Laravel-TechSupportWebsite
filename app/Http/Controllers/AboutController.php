<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create()
    {
        return view('about.FAQ');
    }

    public function store(ContactFormRequest $request)
    {
        session()->put('thanks',  'Thanks for contacting us:');
        session()->put('name',  $request->name);
        session()->put('email',  $request->email);
        session()->put('message',  $request->message);
        return Redirect::route('FAQ');
    }
}
