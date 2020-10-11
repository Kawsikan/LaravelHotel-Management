<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function item(){
        return $this->belongsTo('App\Item');
    }
}
