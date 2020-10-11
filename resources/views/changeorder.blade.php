@extends('layouts.app')

@section('content')
    <div class = "wrapper create-pizza">
        <center><h1>Change Order</h1></center><hr>

        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form action="/update-order/{{$customer->id}}" method = "GET">
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter your name:</label>
                    <input type="text" id = "name" name = "name" class="form-control" value="{{$customer->name}}">
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your address:</label>
                    <input type="text" id = "cus_Address" name = "cus_Address" class="form-control" value="{{$customer->address}}">
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your email:</label>
                    <input type="text" id = "email" name = "email" class="form-control" value = "{{$customer->email}}">
                    </div>

                    <div class="form-group">
                        <label for="name">Enter your telephone:</label>
                    <input type="text" id = "telephone_number" name = "telephone_number" class="form-control" value = "{{$customer->telephone}}">
                    </div>

                         <center><button type="submit" class="btn btn-secondary">Change order</button></center><br>
                </form>
                            <center><center><p>What do you wish to do ?</p></center>
                            <form action="/delete-order/{{$order->id}}" method = "GET">
                                @csrf
                                @method('DELETE')
                                <button type = "submit" class="btn btn-warning">Delete Order</button>
                            </form><br>
                            <form action="/continue" method="GET">
                                <button type = "submit" class="btn btn-success">Continue</button>
                            </form></center>
            </div>
            
            <div class="col-lg-4"></div>
          </div> 
    </div>
 @endsection



