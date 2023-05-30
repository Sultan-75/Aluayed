<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('page_title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!--Font Awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('front_assets/css/style.css') }}" />
</head>

<body>
    <!--top contact-->
    <div class="au-top-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 text-md-center text-sm-center">
                    <span><i class="fa fa-phone"></i> +44 123 123 | </span>
                    <span><i class="fa fa-envelope"></i> abc@gmail.com</span>
                </div>
                <div class="col-md-12 col-lg-6 text-lg-right text-md-center text-sm-center">
                    <i class="au-top-contact-icon fa-brands fa-facebook-f"></i>
                    <i class="au-top-contact-icon fa-brands fa-twitter"></i>
                    <i class="au-top-contact-icon fa-brands fa-instagram"></i>
                    <i class="au-top-contact-icon fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>
    </div>

    <!--  nav start -->
    <div class="au-nav-fill container-fluid" id="myHeader">
        <div class="container">
            <nav class="navbar navbar-expand-lg au-nav-accent p-0">
                <a class="navbar-brand text-white" href="#">Al Ubayed Foundation</a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars mt-1"></i>
                    </span>
                    <span class="close text-dark px-1 text-dark">
                        <i class="fa fa-close" style="color: #f31243; font-size: 32px"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse au-bg-accent" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="{{ url('/') }}">Home
                                <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                About Us
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Who we are</a>
                                <a class="dropdown-item" href="#">What we do</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/emergencyappeal') }}">Emergency Appeals</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                Projects
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Projects you can support</a>
                                <a class="dropdown-item" href="#">Where we work</a>
                                <a class="dropdown-item" href="#">Latest news</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Clothing Banks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact Us
                            </a>
                        </li>

                        <li class="nav-item dropdown au-btn-donate">
                            <a class="nav-link text-white" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                Donate
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url('/donate/online') }}">Donate Online</a>
                                <a class="dropdown-item" href="{{ url('/donate/bank') }}">Bank Transfer</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--  nav end -->
    @section('container')
    @show
    <!--  Footer Start -->
    <footer class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white">Al Ubayed Foundation</h3>
                    <p class="text-light py-3 text-justify">
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Alias natus voluptatibus officiis veniam,
                        vitae maiores eaque quis sunt, sequi saepe
                        accusantium exercitationem itaque autem similique.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-5">Quick Links</h4>
                    <ul class="au-footer-list">
                        <li><a href=""> About</a></li>
                        <li><a href="">Emergency Appeals</a></li>
                        <li><a href="">Projects</a></li>
                        <li><a href="">Clothing Banks</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Donate</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-5">Social Links</h4>
                    <ul class="au-footer-list">
                        <li class="mb-2">
                            <a href="">
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href=""> <span> Twitter </span> </a>
                        </li>
                        <li class="mb-2">
                            <a href="">
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href=""><span>Youtube</span> </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-5">Contact Us</h4>
                    <div class="au-footer-contact mt-3">
                        <span class="mr-2"><i class="fa fa-phone"></i></span>
                        <span>+44 123 123</span>
                    </div>
                    <div class="au-footer-contact mt-3">
                        <span class="mr-2"><i class="fa fa-envelope"></i></span>
                        <span>abc@example.com</span>
                    </div>
                    <div class="au-footer-contact mt-3">
                        <span class="mr-2"><i class="fa fa-location-dot"></i></span>
                        <span>london, UK</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="text-center p-2" style="color: rgb(241, 240, 240)">
                © 2023-2024 Copyright Al Ubayed Foundation
                <p class="mt-1">
                    Registration no:
                    <span class="font-weight-bold" style="color: rgb(22, 192, 244)">123123 | UK</span>
                </p>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('front_assets/js/function.js') }}"></script>
</body>

</html>
