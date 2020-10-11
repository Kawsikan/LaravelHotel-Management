@extends('layouts.adminapp')

@section('content')
    <center><h1>Order</h1></center> <hr>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
           <Center> <div style="border:1px solid black;font-size:20px">
                <label for="cus_code">Customer Code : </label>{{$order->customer->id}}<br>
                <label for="cus_name">Customer Name : </label>{{$order->customer->name}}<br>
                <label for="cus_tele">Customer telephone : </label>{{$order->customer->telephone}}<br>
                <label for="cus_email">Customer email : </label>{{$order->customer->email}}<br>
                <label for="cus_item">Customer Item : </label>{{$order->item->name}}<br>
                <label for="cus_units">Number of Item Units : </label>{{$order->number_of_units}}<br>
                <label for="cus_units">Date : </label>{{$order->created_at}}<br>
                <label for="cus_price">Total Price : </label>{{$order->total_price}}<br><br>
               
            </div></Center>
        </div>
        <div class="col-lg-2">
            <center><form action="/completed/{{$order->id}}" method = "GET"> 
                <button style="float: right;" class = "btn btn-info" type = "submit" >Mark as Completed</button>
            </form></center>
        </div>
        </div>
        
      </div> 
@endsection