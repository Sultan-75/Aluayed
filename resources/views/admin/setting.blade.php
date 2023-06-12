@extends('admin/layout')
@section('page_title', 'Setting')
@section('dashboard_select', 'active')
@section('container')
    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">Setting</h1>
                <hr />
                <div class="card w-75 mx-auto">
                    <div class="bg-white pt-1 px-3">
                        <div class="d-flex justify-content-between my-2">
                            <p></p>
                            <h3 class="text-center text-primary">All User List</h3>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#exampleModal">
                                Add New User
                            </button>
                        </div>

                        <div class="w-75 mx-auto">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-secondary text-light">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr class="bg-light text-dark">
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->role }}</td>
                                            <td>
                                                <a onclick="return confirm('Are You Sure to Remove a User!');"
                                                    href="{{ url('admin/user/delete') }}/{{ $item->id }}"
                                                    class="btn btn-danger btn-sm">Remove</a>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.registration') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="name" class="control-label mb-1 font-weight-bold">User Name
                                </label>
                                <input id="name" name="name" type="text" value="" class="form-control"
                                    aria-required="true" aria-invalid="false" />
                                <span class="help-block text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="email" class="control-label mb-1 font-weight-bold">User Email</label>
                                <input id="email" name="email" type="email" value="" class="form-control"
                                    aria-required="true" aria-invalid="false" />
                                <span class="help-block text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="userrole" class="control-label mb-1 font-weight-bold">User Role</label>
                                <select name="role" id="" class="form-control">
                                    <option>Select A Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Author</option>
                                </select>
                                <span class="help-block text-danger">
                                    @error('role')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="password" class="control-label mb-1 font-weight-bold">Password</label>
                                <input id="password" name="password" type="password" value="" class="form-control"
                                    aria-required="true" aria-invalid="false" />
                                <span class="help-block text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="form-row mt-5">
                            <button type="submit" class="btn btn-info btn-block">
                                <span>SUBMIT</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
