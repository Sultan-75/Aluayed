@extends('admin/layout')
@section('page_title', 'Posts')
@section('post_select', 'active')

@section('container')
    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h3 class="">All Post</h3>
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
                    <div class="col-md-12 mt-3 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered" id="dataTableHover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Post Title</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Post Details</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($data as $item)
                                            <tr>
                                                <th>{{ $i++ }}</th>
                                                <td>{{ $item->post_name }}</td>
                                                <td>{{ $item->category_name }}</td>
                                                <td>
                                                    <img width="100px"
                                                        src="{{ asset('storage/media/post/' . $item->image) }}" />
                                                </td>
                                                <td>{{ $item->post_details }}</td>
                                                <td>
                                                    <a href="{{ url('admin/post/manage_post') }}/{{ $item->id }}"
                                                        class="text-decoration-none">
                                                        <i class="fa fa-edit fa-2x"></i>
                                                    </a>
                                                    <a href="{{ url('admin/post/delete') }}/{{ $item->id }}"
                                                        class="text-decoration-none">
                                                        <i class="fa fa-trash fa-2x text-danger ml-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
