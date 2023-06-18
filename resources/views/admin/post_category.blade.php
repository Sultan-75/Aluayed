@extends('admin/layout')
@section('page_title', 'Post Category')
@section('post_select', 'active')
@section('post_select_collapsed', 'collapsed')

@section('container')
    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <h3 class="">Post Category</h3>
                <hr />
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
                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <h5 class="card-header font-weight-light text-center">
                                Add Post Category
                            </h5>
                            <div class="card-body">
                                <form action="{{ route('category.p_p') }}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="category_name" class="control-label mb-1 font-weight-bold">Category
                                                Name </label>
                                            <input id="category_name" name="category_name" type="text"
                                                value="{{ $category_name }}" class="form-control" aria-required="true"
                                                aria-invalid="false" required />
                                            <span class="help-block text-danger">
                                                @error('category_name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-row mt-3">
                                        <div class="col"></div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-info btn-block">
                                                <span>SUBMIT</span>
                                            </button>
                                        </div>
                                        <div class="col"></div>
                                    </div>
                                    <input type="hidden" name="id" value="{{ $id }}">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-3">
                        <div class="card">
                            <h5 class="card-header font-weight-light">
                                All Post Category
                            </h5>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Post Category Name</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($data as $item)
                                            <tr>
                                                <th>{{ $i++ }}</th>
                                                <td>{{ $item->category_name }}</td>
                                                <td class="text-center">
                                                    <a href="{{ url('admin/category/manage_post') }}/{{ $item->id }}"
                                                        class="text-decoration-none">
                                                        <i class="fa fa-edit fa-2x"></i>
                                                    </a>
                                                    <a onclick="return confirm('Read carefully before DELETE!\n________________________\nIf You are Delete this Categoty\nRelated Category Posts Are Removed\nIf yes click OK or Cancel it.');"
                                                        href="{{ url('admin/category/delete') }}/{{ $item->id }}"
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
