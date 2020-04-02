<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Genre;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use function GuzzleHttp\Promise\all;
Use Illuminate\Http\Request;


class GenreController extends Controller
{
    public function product() {
        return $this->hasMany(Products::class);
    }
}

