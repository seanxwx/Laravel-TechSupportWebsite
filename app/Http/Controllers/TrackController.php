<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\UserDetails;

class TrackController extends Controller
{
    public function create()
    {
        return view('track.search');
    }
}