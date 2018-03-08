<?php

namespace App\Http\Controllers;

use App\UserDetails;
use App\Models\Ticket;
use App\CommentDetails;
use Illuminate\Http\Request;


class TicketController extends Controller
{
    public function create()
    {
        return view('ticket.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'Email' => 'required| between:5,100 | email',
            'First_name' => 'required',
            'Last_name' => 'required',
            'Operating_system_be_used' => 'required',
            'Software_issue' => 'required',
            'Description' => 'required',
        ]);


        $allRequest = $request->all();
        $user_details = new UserDetails();
        $user_details->id = $user_details->id;
        $user_details->Email = $allRequest['Email'];
        $user_details->First_name = $allRequest['First_name'];
        $user_details->Last_name = $allRequest['Last_name'];
        $user_details->save();


        $tickets = new Ticket();
        $tickets->Operating_system_be_used = $allRequest['Operating_system_be_used'];
        $tickets->Software_issue = $allRequest['Software_issue'];
        $tickets->Description = $allRequest['Description'];
        $tickets->Status = 'Pending';
        $tickets->User_id = $user_details->id;
        $tickets->save();


        /*
         * Using sessions
         * */
        $request->session()->put('userDetails', $user_details);

        $request->session()->put('ticketDetails', $tickets);

        return redirect()->route('thankyou');
    }



    public function fetch() {
        $tickets = Ticket::orderBy('created_at', 'DESC')->get();

        return response()->json($tickets);
    }



    public function index(Request $request)
    {
        $tickets = Ticket::all();
        return $tickets;
    }

    public function show($id)
    {
        $ticket= Ticket::find($id);
        return $ticket;
    }


    public function update(Request $request, $id)
    {
        try {
            $ticket = Ticket::find($id);
            $ticket->Status = $request->Status;
            //$ticket->details = $request->details;

            $saved = $ticket->save();

            if(!$saved){
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");;
    }

}