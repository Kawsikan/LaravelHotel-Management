<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catering_package extends Model
{

    protected $fillable = [
        'p_name',
        'description',
        'price'   
    ];

    public function cateringPackage(){
        return $this->hasOne('App\Catering_order');
    }
}
