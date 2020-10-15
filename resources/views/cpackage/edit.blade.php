<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Catering package</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark  shadow-sm">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">YummyHut</a>

        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>

    </nav>
    <!--------------------------------------------------------End of Header------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------Start of Sidebar ---------------------------------------------------------------->


    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="#">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Menu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/showadmin">
                                <span data-feather="layers"></span>
                                catering package
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/show_corders">
                                <span data-feather="layers"></span>
                                catering order
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/show-packages">
                                <span data-feather="layers"></span>
                                catering Home
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Reports</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Catering report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Other report
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!--------------------------------------------------------End of Sidebar------------------------------------------------------------------>
            <!---------------------------------------------------------------------------------------------------------------------------------------->
            <!-------------------------------------------------------Start of Edit View -------------------------------------------------------------->


            <!-- Start of catering_packages.edit view  -->
            <div class="bg-light container-fluid">
                <div class="row">
                    <div class="col-sm-8 offset-sm-3">
                        <br><br><br>
                        <a href="/showadmin" class="btn btn-danger">
                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-backspace-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 
                                    2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 
                                    0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z" />
                            </svg></a>
                        <br><br>
                        <div class="text-center">
                            <h2>Update Package Menu</h2>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br />
                        @endif

                        <!------------------------------ Form tag Start-------------------------------->
                        <div class="bg-white shadow mx-auto" style="border-radius: 21px 21px 21px 21px;">
                            <form method="GET" action="/update-caterpackage/{{$cpackages->id}}">
                                <div class="col-sm-8 offset-sm-3">

                                    @method('PATCH')
                                    @csrf
                                    <br>
                                    <div class="form-group">
                                        <label for="p_name">Package</label>
                                        <input type="text" id="p_name" class="form-control col-sm-7" name="p_name"
                                            value={{ $cpackages->p_name }} />
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" id="description" class="form-control col-sm-7"
                                            name="description" value={{ $cpackages->description }} />
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" id="price" class="form-control col-sm-7" name="price"
                                            value={{ $cpackages->price }} />
                                    </div>

                                    <br>
                                    <div class="col-sm-7 text-center">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    <br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--------------------------------------------------------End of Edit View---------------------------------------------------------------->
            <!---------------------------------------------------------------------------------------------------------------------------------------->
            <!---------------------------------------------------------------------------------------------------------------------------------------->
        </div>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>