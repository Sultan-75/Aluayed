@extends('front/layout')
@section('page_title', 'Home')
@section('container')
    <!--  banner -->
    <div>
        <img class="img-fluid" src="{{ asset('front_assets/images/banner.jpg') }}" alt="img" />
    </div>
    <!-- latest appeal start -->
    <section>

        <div class="container mt-5">
            <div class="text-center mb-5 au-heading">Latest Appeals</div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card au-card">
                        <img src="{{ asset('front_assets/images/card.jpg') }}" class="card-img-top img-fluid" />
                        <div class="card-body text-center">
                            <h5 class="card-text text-center au-text-primary">
                                Nigeria health care
                            </h5>
                            <a href="#" class="btn au-btn-card mt-2">Donate now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card au-card">
                        <img src="{{ asset('front_assets/images/card.jpg') }}" class="card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-text text-center au-text-primary">
                                Nigeria health care
                            </h5>
                            <a href="#" class="btn au-btn-card mt-2">Donate now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card au-card">
                        <img src="{{ asset('front_assets/images/card.jpg') }}" class="card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-text text-center au-text-primary">
                                Nigeria health care
                            </h5>
                            <a href="#" class="btn au-btn-card mt-2">Donate now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card au-card">
                        <img src="{{ asset('front_assets/images/card.jpg') }}" class="card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-text text-center au-text-primary">
                                Nigeria health care
                            </h5>
                            <a href="#" class="btn au-btn-card mt-2">Donate now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-12">
                    <a href="">
                        <h6 class="au-text-primary">More Appeals</h6>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- latest appeal end -->
    <!-- Education Projects start -->
    <section>
        <div class="container mt-5">
            <div class="text-center au-heading mb-5">
                Education Projects
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card au-card">
                        <img src="{{ asset('front_assets/images/card.jpg') }}" class="card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-text text-center au-text-primary">
                                Library
                            </h5>
                            <a href="#" class="btn au-btn-card mt-2">Donate now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card au-card">
                        <img src="{{ asset('front_assets/images/card.jpg') }}" class="card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-text text-center au-text-primary">
                                Library
                            </h5>
                            <a href="#" class="btn au-btn-card mt-2">Donate now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card au-card">
                        <img src="{{ asset('front_assets/images/card.jpg') }}" class="card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-text text-center au-text-primary">
                                Library
                            </h5>
                            <a href="#" class="btn au-btn-card mt-2">Donate now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card au-card">
                        <img src="{{ asset('front_assets/images/card.jpg') }}" class="card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-text text-center au-text-primary">
                                Library
                            </h5>
                            <a href="#" class="btn au-btn-card mt-2">Donate now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-12">
                    <a href="">
                        <h6 class="au-text-primary">More Projects</h6>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Education Projects end-->
    <!-- Overview start -->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-globe fa-5x au-text-primary"></i>
                            <h5 class="au-text-primary my-3">
                                100% Donations Policy
                            </h5>
                            <p class="text-center">
                                Donations change and save lives. Every
                                single penny that you donate is therefore
                                used solely for charitable efforts.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body au-text-primary text-center">
                            <i class="fa fa-search fa-5x"></i>
                            <h5 class="au-text-primary my-3">
                                Transparent Expenditure
                            </h5>
                            <p class="text-center">
                                Trust monitors every donation to ensure that
                                distinct Zakat, Sadaqah and Lillah funds are
                                spent correctly.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body au-text-primary text-center">
                            <i class="fa fa-handshake fa-5x"></i>
                            <h5 class="au-text-primary my-3">
                                Making a Difference
                            </h5>
                            <p class="text-center">
                                Since 2001, Ummah Welfare Trust has
                                delivered your donations to help over 30
                                million people around the Ummah
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Overview end -->
    <!-- reports start -->
    <section class="mt-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('front_assets/images/lower-section.jpg') }}" alt="" />
                </div>
                <div class="col-md-6 text-center my-auto">
                    <h4 class="au-text-primary mt-2">
                        Ya Ummati: New Annual Report!
                    </h4>
                    <p class="mt-2 px-2">
                        From the most beloved deeds of Allah is to make a
                        believer happy and remove a grief from him, or to
                        repay his debt, or to satisfy his hunger.’ [Bayhaqi]
                        Ummah Welfare Trust has delivered over £55 million
                        around the Ummah during the past year,
                        alhamdulillah. See this year’s new report capturing
                        some of the work delivered. May Allah accept your
                        charity, and recompense you for it in this life and
                        the next.
                    </p>
                    <a class="mt-2 au-text-primary" href="">Read The Report</a>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 text-center my-auto">
                    <h4 class="au-text-primary mt-2">Types of Charity</h4>
                    <p class="mt-2 px-2">
                        There are two main types of charity in Islam: Zakat
                        and Sadaqah. However, downstream from those are
                        other types of charity that jurists in Islam have
                        identified. It can sometimes be confusing knowing
                        which is which, and what intention to make when
                        donating. Read Ummah Welfare Trust’s guide to learn
                        about these different types of charity, and donate
                        with confidence.
                    </p>
                    <a class="mt-2 au-text-primary" href="">Read The Report</a>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('front_assets/images/lower-section.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- reports end -->
    <!-- overall start -->
    <section class="mt-5">
        <div class="container">
            <h3 class="text-center au-text-primary mb-5">
                Beneficiaries During The Past Year
            </h3>

            <div class="row">
                <div class="col-md-4">
                    <div class="card au-card-overall">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-mosque fa-3x au-text-primary"></i>
                            <h5 class="au-text-primary my-3">1,536,000</h5>
                            <p class="text-center">Islamic Rituals</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card au-card-overall">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-truck-medical fa-3x au-text-primary"></i>
                            <h5 class="au-text-primary my-3">1,250,600</h5>
                            <p class="text-center">Emergency Relief</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card au-card-overall">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-solid fa-droplet fa-3x au-text-primary"></i>
                            <h5 class="au-text-primary my-3">808,500</h5>
                            <p class="text-center">Water & Sanitation</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card au-card-overall">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-chalkboard-user fa-3x au-text-primary"></i>
                            <h5 class="au-text-primary my-3">558,730</h5>
                            <p class="text-center">Da'wah & Education</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card au-card-overall">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-helmet-safety fa-3x au-text-primary"></i>
                            <h5 class="au-text-primary my-3">535,300</h5>
                            <p class="text-center">Construction</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card au-card-overall">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-solid fa-moon fa-3x au-text-primary"></i>
                            <h5 class="au-text-primary my-3">327,810</h5>
                            <p class="text-center">Ramadhan & Gift</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card au-card-overall">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-house fa-3x au-text-primary"></i>
                            <h5 class="au-text-primary my-3">258,370</h5>
                            <p class="text-center">Household Assistance</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card au-card-overall">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-wheelchair-move fa-3x au-text-primary"></i>
                            <h5 class="au-text-primary my-3">20,930</h5>
                            <p class="text-center">
                                Livelihoods & Training
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card au-card-overall">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-solid fa-kit-medical fa-3x au-text-primary"></i>
                            <h5 class="au-text-primary my-3">94,530</h5>
                            <p class="text-center">Medical Aid</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- overall end -->
    <!-- bottom card start -->
    <section>
        <div class="container">
            <h3 class="text-center au-text-primary my-5">Latest News</h3>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card au-card">
                        <img src="{{ asset('front_assets/images/bottom-card.jpg') }}" class="img-fluid card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-text text-center au-text-primary">
                                Ramadhan 1444 Relief Efforts
                            </h5>
                            <p class="py-3">
                                By Allah’s grace, Ummah Welfare Trust fed
                                hundreds of thousands of Muslims
                            </p>
                            <a href="#" class="btn au-btn-card-bottom mt-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card au-card">
                        <img src="{{ asset('front_assets/images/bottom-card.jpg') }}" class="img-fluid card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-text text-center au-text-primary">
                                Ramadhan Relief for Bangladesh
                            </h5>
                            <p class="py-3">
                                By Allah’s grace, Ummah Welfare Trust fed
                                hundreds of thousands of Muslims
                            </p>
                            <a href="#" class="btn au-btn-card-bottom mt-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card au-card">
                        <img src="{{ asset('front_assets/images/bottom-card.jpg') }}" class="img-fluid card-img-top" />
                        <div class="card-body text-center">
                            <h5 class="card-text text-center au-text-primary">
                                Ramadhan Aid for Iraq
                            </h5>
                            <p class="py-3">
                                By Allah’s grace, Ummah Welfare Trust fed
                                hundreds of thousands of Muslims
                            </p>
                            <a href="#" class="btn au-btn-card-bottom mt-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bottom card end -->
    <section class="my-5">
        <div class="quote d-flex justify-content-center align-item-center">
            <div class="container text-center my-auto">
                <h4 class="text-light">
                    ‘Good actions protect from evil endings and secret
                    charity extinguishes the anger of Allah.’
                </h4>
                <p class="text-light">[Tabarani]</p>
            </div>
        </div>
    </section>
    <!-- Qoute end -->
@endsection
