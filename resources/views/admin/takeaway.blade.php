@extends('layouts.adminapp')

@section('content')
    <center><h1>Pending order List</h1></center> <hr>

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
                  <th>Date and Time</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach($orders as  $order)
              <tbody>
                <tr>
                  <td>{{$order->customer_id}}</td>
                  <td>{{$order->customer->name}}</td>
                  <td>{{$order->item->name}}</td>
                  <td>{{$order->number_of_units}}</td>
                  <td>{{$order->created_at}}</td>
                  <td> 
                    <form action="/view/{{$order->id}}" method = "GET" >
                      <button type="submit" class="btn btn-info">View</button>
                    </form>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
      

        </div>
        <div class="col-lg-2"><div>
        <form action="/download-report" method = "GET">
          @csrf
          <center><button type="submit" class="btn btn-success" >Save as PDF</button></center><br>
        </form></div>
        <div>
          <form action="/completed-orders" method = "GET">
            @csrf
            <center><button type="submit" class="btn btn-success" >Completed Orders <span class="badge badge-light">{{$count}}</span></button></center><br>
          </form>
        </div>
      
      </div>
      </div> 
@endsection
