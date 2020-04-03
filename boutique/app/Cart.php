<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;
use App\Product;

class Cart extends Model
{

    // protected $fillable = ['client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
