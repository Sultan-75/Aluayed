<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('page_title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <!-- Datatable CSS -->
    <link href="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet"
        media="all" />
    <!-- Main CSS-->
    <link href="{{ asset('admin_assets/css/style.css') }}" rel="stylesheet" media="all" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler navbar-toggler-right bg-danger" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-uppercase" href="#">Al Ubayed</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{ session('ADMIN_NAME') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                        <a class="dropdown-item" href="{{ url('admin/profile') }}"><i class="fa fa-user"></i>
                            Profile</a>
                        <hr />
                        <a class="dropdown-item" href="{{ url('admin/setting') }}"><i class="fa fa-cog"></i> Setting</a>
                        <hr />
                        <a class="dropdown-item" href="{{ url('admin/logout') }}"><i class="fa fa-sign-out"></i>
                            Logout</a>
                    </div>
                </li>
                <!-- This menu is hidden in bigger devices with d-sm-none.
               The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
                <li class="nav-item dropdown d-sm-block d-md-none">
                    <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Dashboard Items
                    </a>
                    <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                        <a class="dropdown-item" href="{{ url('admin/dashboard') }}">Dashboard</a>
                        <a class="dropdown-item" href="{{ url('admin/category/manage_donation') }}">Donation
                            Category</a>
                        <a class="dropdown-item" href="{{ url('admin/category/manage_post') }}">Post Category</a>
                        <a class="dropdown-item" href="{{ url('admin/post/manage_post') }}">Add Post</a>
                        <a class="dropdown-item" href="{{ url('admin/post') }}">All Post</a>
                    </div>
                </li>
                <!-- Smaller devices menu END -->
            </ul>
        </div>
    </nav>
    <!-- NavBar END -->

    <div class="row" id="body-row">
        <!-- Sidebar Start -->
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MAIN MENU ITEMS</small>
                </li>

                <!-- Menu with submenu -->
                <a href="{{ url('admin/dashboard') }}"
                    class="bg-dark s1 @yield('dashboard_select') list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-dashboard fa-fw mr-3"></span>
                        <span class="menu-collapsed">Dashboard</span>
                    </div>
                </a>
                <!-- Submenu content -->
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false"
                    class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-list-alt mr-3"></span>
                        <span class="menu-collapsed">Category</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id="submenu2" class="collapse sidebar-submenu">
                    <a href="{{ url('admin/category/manage_donation') }}"
                        class="@yield('donation_select') list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Donation Category</span>
                    </a>
                    <a href="{{ url('admin/category/manage_post') }}"
                        class="@yield('post_select') list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Post Category</span>
                    </a>
                </div>

                <a href="#submenu3" data-toggle="collapse" aria-expanded="false"
                    class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-user fa-fw mr-3"></span>
                        <span class="menu-collapsed">Posts</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id="submenu3" class="collapse sidebar-submenu">
                    <a href="{{ url('admin/post/manage_post') }}"
                        class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Add Post</span>
                    </a>
                    <a href="{{ url('admin/post') }}"
                        class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">All Post</span>
                    </a>
                </div>

                <a href="#top" data-toggle="sidebar-colapse"
                    class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                        <span id="collapse-text" class="menu-collapsed">Collapse</span>
                    </div>
                </a>
            </ul>
        </div>
        <!-- sidebar-container END -->
        <!-- MAIN -->
        @section('container')
        @show
        <!-- Main Col END -->
    </div>
    <!-- body-row END -->
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
    {{-- Datatables --}}
    <script src="{{ asset('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ asset('admin_assets/js/main.js') }}"></script>
</body>

</html>
