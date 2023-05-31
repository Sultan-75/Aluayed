@extends('front/layout')
@section('page_title', 'Projects')
@section('container')
    <div>
        <img class="img-fluid au-page-header-img" src="{{ asset('front_assets/images/pageHeader.jpg') }}" alt="" />
    </div>
    <!-- projects -->
    <div class="container-fluid au-bg-accent pt-3 pb-2 mb-3 text-light">
        <h3 class="text-center">MOST RECENT</h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('front_assets/images/card.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Most Needy</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="btn au-btn-donate d-block">Donate</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('front_assets/images/card.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Qurbani 2023</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="btn au-btn-donate d-block">Donate</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('front_assets/images/card.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Zakat</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="btn au-btn-donate d-block">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid au-bg-accent pt-3 pb-2 my-3 text-light">
        <h3 class="text-center">DAWAH & TARBIYYAH</h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('front_assets/images/card.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Afghanistan Orphanage</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="btn au-btn-donate d-block">Donate</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('front_assets/images/card.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">New School in Afghanistan</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="btn au-btn-donate d-block">Donate</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('front_assets/images/card.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Masjid Construction</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="btn au-btn-donate d-block">Donate</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('front_assets/images/card.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Afghanistan Orphanage</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="btn au-btn-donate d-block">Donate</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('front_assets/images/card.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">New School in Afghanistan</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="btn au-btn-donate d-block">Donate</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('front_assets/images/card.jpg') }}" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Masjid Construction</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="btn au-btn-donate d-block">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
