<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function categories()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }


    public function presentPrice()
    {
        return number_format($this->price);
    }
}
