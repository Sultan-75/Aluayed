@extends('admin/layout')
@section('page_title', 'Profile')
@section('container')
    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">Profile</h1>
                <hr />
                <div class="w-50 mx-auto">
                    <div class="card">
                        <div class="card-title">
                            <h3 class="text-center text-success font-weight-bold mt-4 mb-0">
                                View & Update Profile
                            </h3>
                        </div>
                        <hr />
                        <div class="card-body text-success pt-3">
                            <form action="{{ route('admin.profile_update') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="ml-1 text-success">NAME</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{ $name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="email" class="ml-1 text-success">EMAIL</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        value="{{ $email }}" />
                                </div>
                                <div class="form-group">
                                    <label for="passInput" class="ml-1 text-success">PASSWORD</label>
                                    <input type="password" name="password" class="form-control" id="passInput"
                                        value="{{ $password }}" />
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" onclick="myFunction2()"
                                            id="gridCheck2" />
                                        <label class="form-check-label" for="gridCheck">
                                            Show Password
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{ $id }}">
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-success" name="submit">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
