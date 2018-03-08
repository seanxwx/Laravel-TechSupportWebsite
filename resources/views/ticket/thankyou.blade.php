@extends('layouts.master')
@section('title', 'Report and issue')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style= "font-size: 35px;font-weight:bold;font-family: Microsoft YaHei">
                <p>Thanks for your booking, you are pending right now.</p>
            </div>
        </div>
    </div>
        <p>Your First name:  {!! Session::get('userDetails')->First_name !!}</p>
        <p>Your Last name:  {!! Session::get('userDetails')->Last_name !!}</p>
        <p>Your ID is:  {!! Session::get('ticketDetails')->User_id !!}</p>
@endsection