@extends('admin/layout')
@section('page_title', 'Manage Post')
@section('post_select', 'active')

@section('container')
    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h3 class="">Add Post</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">Library</li>
                            <li class="breadcrumb-item" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
                <hr class="mt-0" />
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->has('message'))
                            <div class="alert alert-info alert-dismissible fade show w-25 mx-auto" role="alert">
                                <strong>{{ session('message') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-10 mt-3 mx-auto">
                        <div class="card">
                            <h5 class="card-header font-weight-light text-center">
                                Add Post
                            </h5>
                            <div class="card-body">
                                <form action="{{ route('post.m_p_p') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row mb-1">
                                        <div class="col">
                                            <label for="post_name" class="control-label mb-1 font-weight-bold">Post Name or
                                                Title</label>
                                            <input id="post_name" name="post_name" type="text"
                                                value="{{ $post_name }}" class="form-control" aria-required="true"
                                                aria-invalid="false" required />
                                        </div>
                                        <div class="col">
                                            <label for="post_category" class="control-label mb-1 font-weight-bold">Post
                                                Category</label>
                                            <select name="cat_id" id="" class="form-control" required>
                                                <option value="">Select A Category</option>
                                                @foreach ($category as $list)
                                                    @if ($cat_id == $list->id)
                                                        <option selected value="{{ $list->id }}">
                                                        @else
                                                        <option value="{{ $list->id }}">
                                                    @endif
                                                    {{ $list->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class="control-label mb-1 font-weight-bold">Post
                                            Image</label>
                                        <input type="file" name="image" class="form-control"
                                            value="{{ $image }}" id="image" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="post_details" class="control-label mb-1 font-weight-bold">Post
                                            Details</label>
                                        <textarea class="form-control" name="post_details" id="post_details" rows="3" cols="80" required>{{ $post_details }}</textarea>
                                    </div>
                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <div class="form-row mt-3">
                                        <div class="col"></div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-info btn-block">
                                                <span>SUBMIT</span>
                                            </button>
                                        </div>
                                        <div class="col"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
