@extends('layouts.adminapp')

@section('content')
    <center><h1>Completed order List</h1></center> <hr>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          
          <div>
            <table class="table">
              <thead>
                <tr>
                  <th>Customer Code</th>
                  <th>Customer Name</th>
                  <th>Item Name</th>
                  <th>Number of units</th>
                  <th>Status</th>
                </tr>
              </thead>
              @foreach($orders as  $order)
              <tbody>
                <tr>
                  <td>{{$order->customer_id}}</td>
                  <td>{{$order->customer->name}}</td>
                  <td>{{$order->item->name}}</td>
                  <td>{{$order->number_of_units}}</td>
                  <td> 
                      {{$order->status}}
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
      

        </div>
        <div class="col-lg-2"><div>
        <form action="/view-all-orders" method = "GET">
          @csrf
          <center><button type="submit" class="btn btn-success" >Pending Orders <span class="badge badge-light">{{$count}}</span></button></center>
        </form></div></div>
      </div> 
@endsection
