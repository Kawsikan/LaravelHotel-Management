<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function order(){
        return $this->hasOne('App\Order');
    }

    public function getOne($id){
        $item = Item::findorFail($id);
        return view('confirm',['items' => $item]);
     }
}
