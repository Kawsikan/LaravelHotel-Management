<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Order;
use PDF;

class OrderController extends Controller
{
    public function getAllOrders(){
        $orders = Order::all()->where('type','take_away')->where('status','incomplete');
        $count = Order::all()->where('type','take_away')->where('status','completed')->count();
        return view('admin.takeaway',(['orders'=> $orders,'count' => $count]));
        }
    

    public function getOneOrder($id){
        $order = Order::findorFail($id);
      return view('admin.vieworder',['order' => $order]);
     }

     public function destroy($id){
        $order = Order::findorFail($id);
        $order->delete();
        return redirect('/')->with('msg' ,'Order is deleted');
     }

     public function getAllForReport(){
         $orders = Order::all();
         return view('reportpdf',compact('orders'));
     }

     public function downloadPDF(){
         $orders = Order::all();
         $pdf = PDF::loadView('reportpdf',compact('orders'));
         return $pdf->download('take_away_orders.pdf');
     }

     public function getCompletedOrders(){
        $orders = Order::all()->where('type','take_away')->where('status','completed');
        $count = Order::all()->where('type','take_away')->where('status','incomplete')->count();
        return view('admin.completedorders',['orders' => $orders,'count'=>$count]);
        }

        public function markAsCompleted($id){
            $orders = Order::findorFail($id);
            $orders->status = "completed";
            $orders->save();

            return redirect('/view-all-orders');
        }



}
