@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center> {{ __('You are logged in as an admin!') }}</center>

                    <form action="/view-all-orders" method="GET"><input type="submit" value = "Take away orders" class = "btn btn btn-danger"></form><br>
                    <input type="submit" value = "Catering orders" class = "btn btn btn-info"><br><br>
                    <input ype="submit" value = "Delivery Order" class = "btn btn btn-danger"><br><br>
                    <input type="submit" value = "Bill and Payments" class = "btn btn btn-success"><br><br>
                    <input type="submit" value = "Menu and Beverages" class = "btn btn btn-danger"><br><br>
                    <input type="submit" value = "Employee Management" class = "btn btn btn-danger"><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection