@extends('front/layout')
@section('page_title', 'Projects')
@section('container')
    <div>
        <img class="img-fluid au-page-header-img" src="{{ asset('front_assets/images/pageHeader.jpg') }}" alt="" />
    </div>
    <!-- projects -->
    @foreach ($categories as $list)
        <div class="container-fluid au-bg-accent pt-3 pb-2 mb-3 text-light">
            <h3 class="text-center">{{ $list->category_name }}</h3>
            @php
                $id = $list->id;
            @endphp
        </div>

        <div class="container">
            <div class="row mb-3">
                @foreach ($posts as $item)
                    @php
                        $cid = $item->cat_id;
                    @endphp
                    @if ($id == $cid)
                        <div class="col-md-4">
                            <div class="card" style="height: 400px">
                                <img class="card-img-top img-fluid" src="{{ asset('storage/media/post/' . $item->image) }}"
                                    alt="Card image" style="height: 200px" />
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->post_name }}</h5>
                                    <p class="card-text my-">
                                        {{ Str::of($item->post_details)->limit(100) }} <a href="">Read more</a>
                                    </p>
                                </div>
                                <a href="#" class="btn au-btn-donate d-block btn-lg text-light">Donate</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
