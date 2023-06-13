@extends('front/layout')
@section('page_title', 'Contact')
@section('container')

    <!-- Contact Section start -->
    <div class="container">
        <h1 class="my-5 text-center">Contact Us</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="border border-primary border-left-0 border-right-0 border-bottom-0 rounded-top">
                    <div class="card p-3">
                        <h4 class="mt-2">Head Office</h4>
                        <p>London, UK</p>
                        <h4>Office Hour</h4>
                        <p>
                            (Mon-Fri) 9:00am – 6:00pm (GMT+1)<br />
                            (Sat) 10:00am – 4:00pm (GMT+1)
                        </p>
                        <span> <i class="fa fa-phone"></i> +447783030973 | +447984016340</span> <br />
                        <span><i class="fa fa-envelope"></i> alubaydfoundation@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="border border-primary border-left-0 border-right-0 border-bottom-0 rounded-top">
                    <div class="card p-3">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" />
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Subject" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Your Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section end -->
@endsection
