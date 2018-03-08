@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Report and issue</h2>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    {{--the booking ticket form table--}}

    {!! Form::open(['action' => 'TicketController@store']) !!}

    <div class="form-group">
        {!! Form::label('Email', 'Email') !!}
        {!! Form::text('Email', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('First_name', 'First name') !!}
        {!! Form::text('First_name', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Last_name', 'Last name') !!}
        {!! Form::text('Last_name', '', ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('Operating_system_be_used', 'Operating system be used') !!}
        {!! Form::text('Operating_system_be_used', '', ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('Software_issue', 'Software issue(Summarise your enquiry in one sentence)') !!}
        {!! Form::text('Software_issue', '', ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('Description', 'Description(More information)') !!}
        {!! Form::textarea('Description', '', ['class' => 'form-control']) !!}
    </div>


    <button class="btn btn-success" type="submit">Submit</button>

    {!! Form::close() !!}
@endsection