@extends('admin/layout')
@section('page_title', 'Dashboard')
@section('dashboard_select', 'active')
@section('container')
    <div class="col">
        <div class="row">
            <div class="col-md-12">
                <h3 class="">Dashboard</h3>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header font-weight-light">Overview</h5>
                            <div class="card-body">
                                <h5 class="card-title text-danger">Total Products</h5>
                                <hr />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-danger bg-light mb-3">
                            <div class="card-header h5">Overview</div>
                            <div class="card-body">
                                <h5 class="card-title text-danger">Sample Products</h5>
                                <hr />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="card text-danger bg-light mb-3">
                            <div class="card-header h5">Overview</div>
                            <div class="card-body">
                                <h5 class="card-title text-danger">Total Users</h5>
                                <hr />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
