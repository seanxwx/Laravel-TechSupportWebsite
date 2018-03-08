<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetails;

class UserDetailsController extends Controller
{
    public function create()
    {
        $user = new User;
        return view('user.create', ['user' => $user ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'User_id' => 'required',
            'Email' => 'required',
            'First_name' => 'required',
            'Last_name' => 'required',
            'OS' => 'required',
            'Software_issue' => 'required',
            'Description' => 'required',
        ]);

        User::create($request->all());
        return redirect()->route('user.create') ->with('success','User added successfully');
    }
}