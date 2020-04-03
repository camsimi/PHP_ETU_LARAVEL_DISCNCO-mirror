<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Subgenre;

class Genre extends Model
{

    public function products() {
        return $this->hasMany(Product::class, 'genre_id', 'id');
    }

    public function subgenres()
    {
        return $this->hasMany(Subgenre::class);
    }
}
