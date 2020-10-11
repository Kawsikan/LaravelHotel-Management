<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Item;

class ItemController extends Controller
{
    public function insertItems(){
        $item = new Item();
        $item->name = "Faluda";
        $item->type = "beverages";
        $item->price = 180.0;
        $item->description = "unique taste";

        $item->save();

        return "item has been added";
    }

    public function show(){
        $items = Item::all();
        return view('showitems',compact('items'));
    }

    public function getOne($id){
        $item = Item::findorFail($id);
        return view('confirm',['items' => $item]);
     }

     

}
