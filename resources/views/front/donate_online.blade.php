@extends('front/layout')
@section('page_title', 'Donate Online')
@section('container')
    <div>
        <img class="img-fluid" src="{{ asset('front_assets/images/pageHeader.jpg') }}" alt="" />
    </div>
    <div class="container">
        <div class="text-right my-3">
            @if (session('FRONT_USER_ID'))
                <a href="{{ url('/donate/user/dashboard') }}" class="btn au-btn-accent">Dashboard</a>
            @else
                <a href="{{ url('/donate/user/login') }}" class="btn au-btn-accent">Login</a>
                <a href="{{ url('/donate/user/registration') }}" class="btn au-btn-accent">Register</a>
            @endif

        </div>
        <h3 class="text-center">Donate Online</h3>
        <div class="row">
            <div class="col-lg-7">
                <div class="card px-3 py-3">
                    <form action="" class="w-75 mx-auto">
                        <div class="form-group">
                            <label for="FormControlSelect1">Select Country</label>
                            <select class="form-control" name="d_country" id="FormControlSelect1" required>
                                <option value="">SELECT</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Dubai">Dubai</option>
                                <option value="Iran">Iran</option>
                                <option value="Bangladesh">Bangladesh</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="FormControlSelect2">Select Donation Purpose</label>
                            <select class="form-control" name="d_purpose" id="FormControlSelect2" required>
                                <option value="">SELECT</option>
                                @foreach ($category as $list)
                                    @if ($select_category_name == $list->category_name)
                                        <option selected value="{{ $list->category_name }}">
                                        @else
                                        <option value="{{ $list->category_name }}">
                                    @endif
                                    {{ $list->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="FormControlSelect4"> Types of </label>
                            <select class="form-control" name="d_type" id="FormControlSelect4" required>
                                <option value="">SELECT</option>
                                <option value="SADKAH">SADKAH</option>
                                <option value="JAKAT">JAKAT</option>
                                <option value="LILLAH">LILLAH</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="FormControlSelect3">Donation Amount</label>
                            <input type="text"class="form-control" name="d_amount"id="FormControlSelect3" required>
                        </div>
                        <input type="submit" value="ADD" class="btn btn-success">
                        <input type="reset" value="CLEAR" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
