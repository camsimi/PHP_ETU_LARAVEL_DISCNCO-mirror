<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;
use App\Genre;

class Subgenre extends Model {

    public function product() {
        return $this->hasMany(Product::class);
    }

    public function genre() {
        return $this->belongsTo(Genre::class);
    }
}
