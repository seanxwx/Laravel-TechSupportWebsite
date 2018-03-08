@extends('layouts.master')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="content">
            @if(\Session::has('error'))
                <div class="alert alert-danger">
                    {{\Session::get('error')}}
                </div>
            @endif

            {{--home image--}}
            <a class = "{{action('PagesController@home')}}}">
                <img src = "image/rmit5.png" alt = "rmit1" width = "95.3%", style = "margin-left: 13px;">
                <img src = "image/rmit1.jpg" alt = "rmit" width = "100%">
            </a>
        </div>
    </div>
    @endsection


