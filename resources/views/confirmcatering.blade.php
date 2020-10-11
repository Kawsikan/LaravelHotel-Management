@extends('layouts.app')

@section('content')
    <div class = "wrapper create-pizza">
        <center><h1></h1></center><hr>

        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form action="/set-catering-order" method = "GET">
                    @csrf
                    <div class="form-group">
                        <label for="name">Package code:</label>
                        <input type="text" id="package_id" name="package_id" value="{{$cpackages->id}}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="name">Package name:</label>
                        <input type="text" id="catering_name" name="catering_name" value="{{$cpackages->p_name}}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="name">Package price:</label>
                        <input type="text" id="item_price" name="item_price" value="{{$cpackages->price}}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your name:</label>
                        <input type="text" id = "name" name = "name" class="form-control">

                    </div>

                    <div class="form-group">
                        <label for="name">Enter your address:</label>
                        <input type="text" id = "cus_Address" name = "cus_Address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your email:</label>
                        <input type="text" id = "email" name = "email" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="name">Enter your telephone number:</label>
                        <input type="text" id = "telephone_number" name = "telephone_number" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="date_and_time">Occasion Date</label>
                        <input type="datetime-local" id = "date_and_time" name = "date_and_time" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Location</label>
                        <input type="text" id = "event_location" name = "event_location" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Number of guests</label>
                        <input type="number" id = "event_guests" name = "event_guests" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Amount</label>
                        <input type="text" id = "amount" name = "amount" class="form-control">
                    </div>
                    
                    <input type="submit" value = "Confirm Order" class="btn btn-primary">
                </form>

                    
            </div>
            <div class="col-lg-4"></div>
          </div> 

   
    </div>
 @endsection