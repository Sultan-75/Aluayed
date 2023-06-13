<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Dashboard</title>
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
            <a href="{{ url('/donate/user/logout') }}" class="text-light">Log out</a>
        </div>
    </div>
    <!--  nav end -->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <h3>{{ $title }} {{ $fname }} {{ $lname }}</h3>
                    <a href="{{ url('/donate/user/editprofile') }}" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="d-flex justify-content-center">
                <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-d-tab" data-toggle="pill"
                            data-target="#pills-donation" type="button" role="tab" aria-controls="pills-donation"
                            aria-selected="true">
                            Donation
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab" data-toggle="pill" data-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            Profile
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile"
                            type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            Donation History
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact"
                            type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            Reset Password
                        </button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-donation" role="tabpanel"
                    aria-labelledby="pills-donation">
                    <!--  content starts here -->
                    <h3 class="text-center">Donation Online</h3>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card px-3 py-3">
                                <form action="" class="w-75 mx-auto">
                                    <div class="form-group">
                                        <label for="FormControlSelect1">Select Country</label>
                                        <select class="form-control" name="d_country" id="FormControlSelect1" required>
                                            <option value="">SELECT</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Dubai">Dubai</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="FormControlSelect2">Select Donation Purpose</label>
                                        <select class="form-control" name="d_purpose" id="FormControlSelect2" required>
                                            <option value="">SELECT</option>
                                            @foreach ($category as $list)
                                                @if ($select_category_name == $list->category_name)
                                                    <option selected value="{{ $list->category_name }}">
                                                    @else
                                                    <option value="{{ $list->category_name }}">
                                                @endif
                                                {{ $list->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="FormControlSelect4"> Types of </label>
                                        <select class="form-control" name="d_type" id="FormControlSelect4" required>
                                            <option value="">SELECT</option>
                                            <option value="SADKAH">SADKAH</option>
                                            <option value="JAKAT">JAKAT</option>
                                            <option value="LILLAH">LILLAH</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="FormControlSelect3">Donation Amount</label>
                                        <input type="text"class="form-control"
                                            name="d_amount"id="FormControlSelect3" required>
                                    </div>
                                    <input type="submit" value="ADD" class="btn btn-success">
                                    <input type="reset" value="CLEAR" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--  content ends here -->
                </div>
                <div class="tab-pane fade show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <!--  content starts here -->
                    <h3 class="text-center">General Information</h3>
                    <div class="row mt-3">
                        <div class="col-md-6 col-sm-12 card">
                            <div class="clearfix my-1">
                                <h6 class="float-left">Country Name</h6>
                                <h6 class="float-right">{{ $country }}</h6>
                            </div>
                            <hr />
                            <div class="clearfix my-1">
                                <h6 class="float-left">Full Name</h6>
                                <h6 class="float-right">{{ $fname }} {{ $lname }}</h6>
                            </div>
                            <hr />
                            <div class="clearfix my-1">
                                <h6 class="float-left">Phone Number</h6>
                                <h6 class="float-right">{{ $phone }}</h6>
                            </div>
                            <hr />
                            <div class="clearfix my-1">
                                <h6 class="float-left">Mobile Number</h6>
                                <h6 class="float-right">{{ $mobile }}</h6>
                            </div>
                            <hr />
                            <div class="clearfix my-1">
                                <h6 class="float-left">Email Address</h6>
                                <h6 class="float-right">{{ $email }}</h6>
                            </div>
                            <hr />
                        </div>
                        <div class="col-md-6 col-sm-12 card">
                            <div class="clearfix my-1">
                                <h6 class="float-left">Address 1 :</h6>
                                <h6 class="float-right">
                                    {{ $address1 }}
                                </h6>
                            </div>
                            <hr />
                            <div class="clearfix my-1">
                                <h6 class="float-left">Address 2 :</h6>
                                <h6 class="float-right">
                                    {{ $address2 }}
                                </h6>
                            </div>
                            <hr />
                            <div class="clearfix my-1">
                                <h6 class="float-left">Address 3 :</h6>
                                <h6 class="float-right">
                                    {{ $address3 }}
                                </h6>
                            </div>
                            <hr />
                            <div class="clearfix my-1">
                                <h6 class="float-left">Postcode</h6>
                                <h6 class="float-right">{{ $pcode }}</h6>
                            </div>
                            <hr />
                            <div class="clearfix my-1">
                                <h6 class="float-left">Town/City</h6>
                                <h6 class="float-right">{{ $town }}</h6>
                            </div>
                        </div>
                    </div>

                    <!--  content ends here -->
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <h5 class="card-header">Total Contribution</h5>
                                <h5 class="card-header">$200</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Fund</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>10</td>
                                            <td>Qurbani</td>
                                            <td>05/05/2023</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>100</td>
                                            <td>Zakat</td>
                                            <td>10/02/2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="mx-auto w-50 card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">
                            Reset Password
                        </h5>
                        <form class="my-3">
                            <div class="form-floating mb-3">
                                <label for="CurrentPassword">Current Password</label>
                                <input type="password" class="form-control" id="CurrentPassword" />
                            </div>
                            <div class="form-floating mb-3">
                                <label for="NewPassword">New Password</label>
                                <input type="password" class="form-control" id="NewPassword" />
                            </div>
                            <div class="form-floating mb-3">
                                <label for="Re-typePassword">Re-type Password</label>
                                <input type="password" class="form-control" id="Re-typePassword" />
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary text-uppercase fw-bold" type="submit">
                                    Change Password
                                </button>
                            </div>
                        </form>
                    </div>
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
