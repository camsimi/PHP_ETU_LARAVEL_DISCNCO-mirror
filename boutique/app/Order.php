<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Order extends Model
{

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
