@extends('front/layout')
@section('page_title', 'Donate Online')
@section('container')
    <div>
        <img class="img-fluid" src="{{ asset('front_assets/images/pageHeader.jpg') }}" alt="" />
    </div>
    <div class="container">
        <div class="text-right my-3">
            <a href="{{ url('/donate/user/login') }}" class="btn au-btn-accent">Login</a>
            <a href="{{ url('/donate/user/registration') }}" class="btn au-btn-accent">Register</a>
        </div>
    </div>
@endsection
