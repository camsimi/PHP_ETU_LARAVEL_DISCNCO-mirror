<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Cart;
use App\Subgenre;
use App\Order;

class Product extends Model
{

    public function carts()
    {
        return $this->belongsToMany(Cart::class)->withPivot('quantity');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

}
