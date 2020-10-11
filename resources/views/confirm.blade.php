@extends('layouts.app')

@section('content')
    <div class = "wrapper create-pizza">
        <center><h1></h1></center><hr>

        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form action="/confirmOrder" method = "GET">
                    @csrf
                    <div class="form-group">
                        <label for="name">Item code:</label>
                        <input type="text" id="item_id" name="item_id" value="{{$items->id}}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="name">Item name:</label>
                        <input type="text" id="item_name" name="item_name" value="{{$items->name}}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="name">Item price:</label>
                        <input type="text" id="item_price" name="item_price" value="{{$items->price}}" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your name:</label>
                        <input type="text" id = "name" name = "name" class="form-control">
                        @error('name')
                           <p style = "color:red;">{{$message}}</p> 
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your address:</label>
                        <input type="text" id = "cus_Address" name = "cus_Address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your email:</label>
                        <input type="text" id = "email" name = "email" class="form-control">
                    </div>
                        @error('email')
                           <p style = "color:red;">{{$message}}</p> 
                        @enderror

                    <div class="form-group">
                        <label for="name">Enter your telephone number:</label>
                        <input type="text" id = "telephone_number" name = "telephone_number" class="form-control">
                    </div>
                    @error('telephone_number')
                           <p style = "color:red;">{{$message}}</p> 
                    @enderror

                    <div class="form-group">
                        <label for="name">Enter Number of units:</label>
                        <input type="number" id = "units" name = "units" class="form-control" >
                    </div>
                    @error('units')
                           <p style = "color:red;">{{$message}}</p> 
                    @enderror
                    
                    <input type="submit" value = "Confirm Order" class="btn btn-primary">
                </form>

                    
            </div>
            <div class="col-lg-4"></div>
          </div> 

   
    </div>
 @endsection