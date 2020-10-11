@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="jumbotron">
            <h1 class="display-4">Newly Added Menus</h1>
            <p class="lead">You can choose whatever you want ! whatever you like !</p>
            <hr class="my-4">
            <ul class="list-group" >
              <div class = "scrollable">
                @foreach ($items as $item)
                  <li class="list-group-item">{{$item->name}}</li>
                @endforeach
            </div>
            </ul> <br>
            <a class="btn btn-primary btn-lg" href="/" role="button">Get more !</a>
          </div>
    </div>
    <div class="col-lg-6">
        <div class="jumbotron">
            <h1 class="display-4">Yummy Hut</h1>
            <p class="lead">Notification and messages</p>
            <hr class="my-4">
              
            <div class="card" style="width: 18rem;">
               
                <div class="card-body">
                  <h5 class="card-title">Discounts</h5>
                  <p class="card-text">10% discount for beverages</p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    See
                  </button>

                  <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Discounts</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                         Regestered customers can gain 10% discount when you are putting take away orders
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </div>
    </div>
    
  </div> 
@endsection