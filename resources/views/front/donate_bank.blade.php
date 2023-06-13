@extends('front/layout')
@section('page_title', 'Donate Bank Transfer')
@section('container')
    <!--  start -->
    <div>
        <img class="img-fluid" src="{{ asset('front_assets/images/pageHeader.jpg') }}" alt="" />
    </div>
    <!-- bank information start -->
    <section>
        <div class="container">
            <div class="text-right my-3">
                <a href="{{ url('/donate/user/login') }}" class="btn au-btn-accent">Login</a>
                <a href="{{ url('/donate/user/registration') }}" class="btn au-btn-accent">Register</a>
            </div>
            <div class="row my-5 text-center">
                <div class="col-md-6 col-sm-12">
                    <h3 class="au-text-accent">UK Transfer</h3>
                    <p class="py-3">
                        If you wish to donate by making a bank transfer, you will require
                        the following account details
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Account name</th>
                                <td>Al Ubayed Foundation</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Bank name and address:</th>
                                <td>
                                    Al Rayan Bank, 24a Calthorpe Road, Birmingham, B15 1RP
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Sort Code</th>

                                <td>30-91-92</td>
                            </tr>
                            <tr>
                                <th scope="row">Account Number</th>
                                <td>74931968</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3 class="au-text-accent">International Transfer</h3>
                    <p class="py-3">
                        If you wish to donate by making a bank transfer, you will require
                        the following account details
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Account name</th>
                                <td>Al Ubayed Foundation</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Bank name and address:</th>
                                <td>
                                    Al Rayan Bank, 24a Calthorpe Road, Birmingham, B15 1RP
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Sort Code</th>

                                <td>30-91-92</td>
                            </tr>
                            <tr>
                                <th scope="row">Account Number</th>
                                <td>74931968</td>
                            </tr>
                            <tr>
                                <th scope="row">BIC</th>
                                <td>LOYDGB21075</td>
                            </tr>
                            <tr>
                                <th scope="row">IBAN</th>
                                <td>GB48 LOYD 3091 9274 9319 68</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- bank information end -->
@endsection
