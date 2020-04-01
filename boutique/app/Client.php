<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
use App\Order;

class Client extends Model
{


    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
