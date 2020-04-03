<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public function genre() {
        return $this->belongsTo('App\Genre');
    }
}
