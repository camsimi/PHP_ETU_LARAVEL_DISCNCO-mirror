<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Subgenre;


class Genre extends Model {

    public function product() {
        return $this->hasMany(Product::class);
    }

    public function subgenre() {
        return $this->hasMany(Subgenre::class);
    }
}
