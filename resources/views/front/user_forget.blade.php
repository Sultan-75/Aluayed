@extends('front/layout')
@section('page_title', 'Forget Password')
@section('container')
    <!-- login form start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show w-25 mx-auto" role="alert">
                        <strong>{{ session('message') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Send an Email for a link</h5>
                        <form action="{{ route('forget.f_p') }}" method="POST" class="my-3">
                            @csrf
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Enter Your Register Email</label>
                                <input type="email" name="forgot_email" class="form-control" id="floatingInput"
                                    required />
                            </div>
                            <div class="d-grid">
                                <button class="btn au-btn-accent btn-login text-uppercase fw-bold" type="submit">
                                    Send
                                </button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-between">
                            <a href="{{ url('/donate/user/login') }}">Login</a>
                        </div>
                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                <strong>{{ session('error') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login form end -->
@endsection
