<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Product;

class Subgenre extends Model
{

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'subgenre_id', 'id');
    }
}
