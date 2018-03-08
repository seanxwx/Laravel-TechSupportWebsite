<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CommentDetails;
use App\UserDetails;
use App\Models\Ticket;


class CommentController extends Controller
{
    protected $autoCheckFields =false;
    public function create()
    {
        $comments = new CommentDetails;
        return view('its.index');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        $allRequest = $request->all();


        $comment_details = new CommentDetails();
        $comment_details->Comment = $allRequest['comment'];
        $comment_details->Ticket_id = $allRequest['ticketid'];
        $comment_details->save();

        return redirect()->route('its.index')->with('success','Comment added successfully');
    }



    public function fetch() {
        $comment_details = CommentDetails::orderBy('created_at', 'DESC')->get();

        return response()->json($comment_details);
    }


    public function index(Request $request)
    {
        $comments= CommentDetails::all();
        return $comments;
    }

    public function show($id)
    {
        $comment= CommentDetails::find($id);
        return $comment;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function apistore(Request $request)
    {
        try {
            $comment = new CommentDetails;

            $comment->Ticket_id = $request->Ticket_id;
            $comment->Comment = $request->Comment;

            $saved = $comment->save();

            if(!$saved){
                return array("status" => "ERROR");
            }
        }

        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");
    }
}
