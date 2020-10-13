<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Catering booking</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link href="{{asset('css/form.css')}}" rel="stylesheet">



</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark ">
        <!--<a class="navbar-brand" href="#">Yummy Hut</a>  class="navbar-brand" -->
        <img class="bd-placeholder-img rounded" width="100" height="40" src="{{URL::asset('/img/logo.jpeg')}}"
            alt="profile Pic">
        <!--  <img class="bd-placeholder-img rounded" width="100" height="40" src="img/logo.jpeg"> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
            aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--mx-auto,ml-auto,mr-auto-->
        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active ">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show-item">Take away</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"> Delivery</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/show-packages"> Catering</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> New</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Menu</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                        <a class="dropdown-item" href="#">Meals</a>
                        <a class="dropdown-item" href="#">Beverages</a>
                        <a class="dropdown-item" href="#">Starters</a>
                    </div>
                </li>
            </ul>

            <div>
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/user') }}"><button type="button" class="btn btn-success">User
                            Dashboard</button></a>
                    <a href="{{ url('/admin') }}"><button type="button" class="btn btn-info">Admin
                            Dashboard</button></a>
                    @else
                    <a href="{{ route('login') }}"> <button type="button" class="btn btn-success">Login</button></a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"> <button type="button" class="btn btn-info">Register</button></a>
                    @endif
                    @endauth
                </div>
                @endif

            </div>
        </div>
    </nav>

    <div class="wrapper create-pizza">
        <center>
            <h1></h1>
        </center>


        <div class="contain">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <form action="/set-catering-order" method="GET">
                        @csrf
                        <div class="form-row">
                            <label class="col-sm-4 col-form-label" for="name">Package code</label>
                            <input type="text" id="package_id" name="package_id" value="{{$cpackages->id}}"
                                class="form-control col-sm-8" readonly>
                        </div>
                        <br>

                        <div class="form-row">
                            <label class="col-sm-4 col-form-label" for="name">Selected package</label>
                            <input type="text" id="catering_name" name="catering_name" value="{{$cpackages->p_name}}"
                                class="form-control col-sm-8" readonly>
                        </div>
                        <br>

                        <div class="form-row">
                            <label class="col-sm-4 col-form-label" for="name">Each person</label>
                            <input type="text" id="item_price" name="item_price" value="{{$cpackages->price}}"
                                class="form-control col-sm-8" readonly>
                        </div>
                        <br>

                        <div class="form-row">
                            <label class="col-sm-4 col-form-label" for="name">Name</label>
                            <input type="text" id="name" placeholder="Billing Name" name="name"
                                class="form-control col-sm-8" required>
                        </div>
                        <br>

                        <div class="form-row">
                            <label class="col-sm-4 col-form-label" for="name">Address</label>
                            <input type="text" id="cus_Address" placeholder="Your address" name="cus_Address"
                                class="form-control col-sm-8" required>
                        </div>
                        <br>

                        <div class="form-row">
                            <label class="col-sm-4 col-form-label" for="name">Email</label>
                            <input type="text" id="email" placeholder="Contact email" name="email"
                                class="form-control col-sm-8" required>
                        </div>
                        <br>


                        <div class="form-row">
                            <label class="col-sm-4 col-form-label" for="name">Telephone</label>
                            <input type="text" id="telephone_number" placeholder="Contact number"
                                name="telephone_number" class="form-control col-sm-8" required>
                        </div>
                        <br>


                        <div class="form-row">
                            <label class="col-sm-4 col-form-label" for="date_and_time">Event Date</label>
                            <input type="datetime-local" id="date_and_time" name="date_and_time"
                                class="form-control col-sm-8" required>
                        </div>
                        <br>

                        <div class="form-row">
                            <label class="col-sm-4 col-form-label" for="name">Event Location</label>
                            <input type="text" id="event_location" placeholder="Address of venue" name="event_location"
                                class="form-control col-sm-8" required>
                        </div>
                        <br>

                        <div class="form-row">
                            <label class="col-sm-4 col-form-label" for="name">Guests </label>
                            <input type="number" id="event_guests" placeholder="Expected number of guests"
                                onchange="getPrice()" name="event_guests" class="form-control col-sm-8" required>
                        </div>
                        <br>

                        <div class="form-row">
                            <label class="col-sm-4 col-form-label" for="name">Bill Amount</label>
                            <input readonly id="amount" placeholder="Total amount" name="amount"
                                class="form-control col-sm-8">
                        </div>
                        <script>
                            getPrice = function () {
                                var numVal1 = Number(document.getElementById("item_price").value);
                                var numVal2 = Number(document.getElementById("event_guests").value);
                                var totalValue = numVal1 * numVal2
                                document.getElementById("amount").value = totalValue.toFixed(2);
                            }
                        </script>
                        <br>
                        <div class="col text-center">
                            <input type="submit" value="Confirm Order" class="btn btn-danger">
                        </div>
                        <hr>
                    </form>


                </div>
                <div class="col-lg-4"></div>
            </div>


        </div>
    </div>



    <!---------------------------------------------------------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------------->

    <!------------------------------FOOTER ------------------------------------>
    <footer class="container py-5">
        <div class="row">
            <div class="col-6 col-md">
                <h5>Catering</h5>
                <ul class="list-unstyled text-small">
                    <p>Yummy Hut catering service is a leading catering service in Colombo Sri Lanka, located in
                        Malabe. Yummy
                        Hut will take care of your birthday parties, wedding functions, almsgivings or any
                        corporate event in a
                        special way with delicious food and high quality catering service.</p>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Others</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Take Away Services</a></li>
                    <li><a class="text-muted" href="#">Delivery Services</a></li>
                    <li><a class="text-muted" href="#">Check Food Menu</a></li>
                    <li><a class="text-muted" href="#">New Season Offers</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Contact US</h5>
                <ul class="list-unstyled text-small">
                    <p><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg> 370 Kaduwela Rd, Malabe 10115</p>
                    <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
                        </svg> 070 300 3235 , 076 605 1555</p>
                    <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                        </svg> info@yummyhut.lk</p>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://yummyhut.lk/">Restaurant</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
            <div class="container">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
            </div>
        </div>
        <p>&copy; Copyright © 2020 Yummy Hut Food & Catering - All Rights Reserved &middot; <a href="#">Privacy</a>
            &middot; <a href="#">Terms</a></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>