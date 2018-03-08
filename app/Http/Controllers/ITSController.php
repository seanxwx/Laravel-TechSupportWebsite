<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;


class ITSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $tickets= Ticket::orderBy('id','DESC')->paginate(5);
        return view('its.index',compact('tickets')) ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('its.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket= Ticket::find($id);
        return view('its.show',compact('ticket'));
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
        $ticket = Ticket::find($id);
        $ticket->Status = $request->status;
        $ticket->save();
//        return redirect()->route('its.index') ->with('success','Comment uploaded successfully');
        return view('its.show',compact('ticket'));
    }
}
