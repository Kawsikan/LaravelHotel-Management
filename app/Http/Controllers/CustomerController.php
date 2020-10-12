<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Order;
use App\Item;
use App\Catering_package;
use App\Catering_order;

class CustomerController extends Controller
{   

    /**
     * 
     * author: kawsikan
     */
    public function setCateringOrder(){

        $customer = new Customer();
        $customer->name = request('name');
        $customer->telephone = request('telephone_number');
        $customer->email = request('email');
        $customer->address = request('cus_Address');

        $corder = new Catering_order();
        $corder->name= request('catering_name');
        $corder->catering_package_id = request('package_id');
        $corder->date_time = request('date_and_time');
        $corder->location = request('event_location');
        $corder->guests = request('event_guests');
        $corder->amount = request('amount');
        $customer->save();
        $customer->cateringOrder()->save($corder);

        return "catering order has been entered";
        
    }
    /**
     * 
     * auhtor : pamal
     */


    public function updateOrder($id){
       
        $customer = Customer::find($id);
  
        $customer->name =  request('name');
        $customer->telephone =  request('telephone_number');
        $customer->email =  request('email');
        
  
        $customer->save();
  
        return redirect('/')->with('msg' ,'Your details are updated and order has been confirmed');
  
     }

     public function message(){
      
        return redirect('/')->with('msg' ,'Thank you !');
  
     }
     
    
    public function setOrder(){

        $validatedData = $request->validate([
            'name' => 'required',
            'telephone_number' => 'required|digits:10',
            'email' => 'required|email',
            'units' => 'required|digits_between:0,9'

        ]);
        
         $customer = new Customer();
         $customer->name = request('name');
         $customer->telephone = request('telephone_number');
         $customer->email = request('email');
         $customer->address = request('cus_Address');
 
         $item = new Item();
         $price = request('item_price');
 
         $order = new Order();
         $units = request('units');
         $order->item_id = request('item_id');
         $order->type = "take_away";
         $order->status = "incomplete";
         $order->number_of_units = request('units');
         $order->total_price = ($units * $price);
         $customer->save();
         $customer->order()->save($order);
 
         return view('changeorder',compact('order','customer'));
         
     }

}