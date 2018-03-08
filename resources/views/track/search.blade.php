@extends('layouts.master')
@section('title', 'Track Progress')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Track Your Progress</h2>
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

    <form action="track.search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                   placeholder="Please type your ticket id"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
        </div>
    </form>

    <div class="container">
        @if(isset($details))
            <p> The Search results for your ticket number <b> {{ $query }} </b> are :</p>
            <h2>Comments</h2>
            <table class="table table-striped">
                <tbody>
                @foreach($details as $tick)

                    @foreach($det as $com)
                        <tr>
                            <td>Ticket ID:  {{$tick->id}}</td>
                            <td>Iussue:  {{$tick->Software_issue}}</td>
                            <td>Description:  {{$tick->Description}}</td>
                        </tr>
                        <tr>
                            <td colspan="3">Comment:  {{$com->Comment}}</td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection