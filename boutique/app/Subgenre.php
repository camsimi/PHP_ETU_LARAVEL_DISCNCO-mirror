<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Genre;

class Subgenre extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "subgenres";
    public $timestamps = false;

    public function product() {
        return $this->hasMany(Product::class);
    }

    public function genre() {
        return $this->belongsTo(Genre::class);
    }
}
