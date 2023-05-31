<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <!--  nav start -->
    <div class="container bg-dark">
        <div class="row d-flex justify-content-between px-3">
            <h3 class="text-light">Logo</h3>
            <a href="{{ url('/donate/user/logout') }}" class="text-light">log out</a>
        </div>
    </div>
    <!--  nav end -->
    <section>
        <div class="container">
            <div class="card">
                <div class="card-title">
                    @if (session()->has('message'))
                        <div class="alert alert-info alert-dismissible fade show w-25 mx-auto" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <a href="{{ url('/donate/user/dashboard') }}" class="btn btn-success">Go Back to Profile</a>
                    <h3 class="text-center mt-3">Update Profile</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('edit.e_p') }}" method="POST" class="my-3">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <label for="title">Title</label>
                                    <select class="form-control" name="title" id="title">
                                        <option value="">Title</option>
                                        <option selected value="{{ $title }}">
                                        <option value="Miss">Miss</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mr&Mrs">Mr & Mrs</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Ms">Ms</option>
                                        <option value="NotSet">Not Set</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <label for="FirstName">First Name *</label>
                                    <input type="text" class="form-control" name="fname" id="FirstName"
                                        value="{{ $fname }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <label for="LastName">Last Name *</label>
                                    <input type="text" class="form-control" name="lname" id="LastName"
                                        value="{{ $lname }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <label for="Telephone">Telephone</label>
                                    <input type="text" class="form-control" id="Telephone" name="phone"
                                        value="{{ $phone }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <label for="Mobile">Mobile</label>
                                    <input type="text" class="form-control" id="Mobile" name="mobile"
                                        value="{{ $mobile }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <label for="Postcode">Postcode *</label>
                                    <input type="text" class="form-control" id="Postcode" name="pcode"
                                        value="{{ $pcode }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <label for="Address1">Address 1 *</label>
                                    <input type="text" class="form-control" id="Address1" name="address1"
                                        value="{{ $address1 }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <label for="Address2">Address 2</label>
                                    <input type="text" class="form-control" id="Address2" name="address2"
                                        value="{{ $address2 }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <label for="Address3">Address 3</label>
                                    <input type="text" class="form-control" id="Address3" name="address3"
                                        value="{{ $address3 }}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <label for="Town">Town/City *</label>
                                    <input type="text" class="form-control" id="Town" name="town"
                                        value="{{ $town }}" />
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="d-grid">
                                <button class="btn btn-lg btn-success fw-bold" type="submit">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
