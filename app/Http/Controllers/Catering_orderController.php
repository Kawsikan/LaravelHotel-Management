<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catering_order;

class Catering_orderController extends Controller
{
    // function to view all catering orders
    public function adminShowAllCOrders(){
        $corder = Catering_order::all();
        return view('catering_orders.showcorder', ['cpackages' => $corder]);
    }

}
