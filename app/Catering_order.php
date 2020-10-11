<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catering_order extends Model
{
    
    protected $table = "catering_orders";

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function cateringPackage(){
        return $this->belongsTo('App\Catering_package');
    }
}
