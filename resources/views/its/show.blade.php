@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Student Issue</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ticket ID:</strong>
                {{ $ticket->id}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Software_issue:</strong>
                {{ $ticket->Software_issue}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $ticket->Description}}
            </div>
        </div>
    </div>


    {!! Form::model($ticket, ['method' => 'PATCH','route' => ['its.update', $ticket->id]]) !!}
    <div class="form-=group">

        {!! Form::label('status', 'Status') !!}
        <select name="status" id="form-control">
            <option>{{$ticket->Status}}</option>
            <option>Pending</option>
            <option>In Progress</option>
            <option>Unresolved</option>
            <option>Resolved</option>
        </select>
    </div>
    <button class="btn btn-success" type="submit">Change</button>
    {!! Form::close() !!}


    {!! Form::open(array('action' => 'CommentController@store','method'=>'POST')) !!}
    <div class="form-group">
        {!! Form::label('comment', 'Comment') !!}
        {!! Form::textarea('comment', '', ['class' => 'form-control']) !!}
        {!! Form::hidden('ticketid', $ticket->id) !!}
    </div>
    <button class="btn btn-success" type="submit">Submit</button>
    {!! Form::close() !!}
@endsection