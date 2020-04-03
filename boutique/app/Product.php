<?php

namespace App;

use App\Genre;
use Illuminate\Database\Eloquent\Model;
use App\Cart;
use App\Subgenre;
use App\Order;

class Product extends Model
{

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function subgenre() {
        return $this->belongsTo(Subgenre::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class)->withPivot('quantity');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

}
