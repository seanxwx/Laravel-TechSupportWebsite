@extends('layouts.master')
@section('title', 'Report and issue')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Track your progress</h2>
            </div>
        </div>
    </div>
    @if(!empty(Session::get('Last_name','First_name')))
        <p>Ticket ID:  {!! Session::get('ticketDetails')->id !!}</p>
        <p>Software issue:  {!! Session::get('ticketDetails')->Software_issue !!}</p>
        <p>Description:  {!! Session::get('ticketDetails')->Description !!}</p>
        <p>Comment:  {!! Session::get('CommDetails')->Comment !!}</p>
    @endif
    {!! Session::get('CommDetails')->Ticket_id !!}
@endsection