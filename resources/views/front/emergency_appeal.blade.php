@extends('front/layout')
@section('page_title', 'Emergency Appeal')
@section('container')
    <div>
        <img class="img-fluid au-page-header-img" src="{{ asset('front_assets/images/pageHeader.jpg') }}" alt="" />
    </div>
    <!-- reports start -->
    <section class="mt-5">
        <div class="container">
            <h3 class="text-center my-5">Emergency Appeal</h3>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('front_assets/images/lower-section.jpg') }}" alt="" />
                </div>
                <div class="col-md-6 my-auto">
                    <h4 class="au-text-primary text-center mt-2">Qurbani 2023</h4>
                    <hr />
                    <p class="mt-2 px-3">
                        Alhamdulillah, we are now in the months of Hajj. These days will
                        culminate in the great days of Dhul Hijjah and the blessed act of
                        Qurbani.
                    </p>
                    <p class="px-3">
                        Prescribed in the Book of Allah and the Sunnah of His Messenger ﷺ,
                        Qurbani is one of the great symbols of Islam. It is an emphasised
                        Sunnah and carries great reward.
                    </p>
                    <div class="text-center">
                        <a class="btn btn-success" href="">Donate Now</a>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 my-auto">
                    <h4 class="au-text-primary mt-2 text-center">Afghanistan Crisis</h4>
                    <hr />
                    <p class="mt-2 px-3">
                        After forty years of brutal war, Afghanistan is facing another
                        manufactured crisis. Crippling sanctions and the freezing of the
                        country’s assets have left millions here facing hunger
                    </p>
                    <p class="px-3">
                        The world is watching as families here suffer. We mustn’t do the
                        same. Support Ummah Welfare Trust’s wide-ranging response here
                        with your donations today.
                    </p>
                    <div class="text-center">
                        <a class="btn btn-success" href="">Donate Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('front_assets/images/lower-section.jpg') }}" alt="" />
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('front_assets/images/lower-section.jpg') }}" alt="" />
                </div>
                <div class="col-md-6 my-auto">
                    <h4 class="au-text-primary mt-2 text-center">
                        Horn of Africa Drought Appeal
                    </h4>
                    <hr />
                    <p class="mt-2 px-3">
                        Hunger today looms over the lives of millions in East Africa. Five
                        straight failed rainy seasons have left rivers in the region dry,
                        and once-fertile lands barren
                    </p>
                    <p class="px-3">
                        Though not in the news, today’s drought is thought to be the
                        region’s worst for decades. Be generous to starving communities by
                        donating your Zakat, Sadaqah and Lillah today.
                    </p>
                    <div class="text-center">
                        <a class="btn btn-success" href="">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- reports end -->
@endsection
