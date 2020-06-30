<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'description', 'price'
    ];

    protected $hidden= [

    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'products_id', 'id');
    }

    public function toppings()
    {
        return $this->hasMany(Topping::class, 'products_id', 'id');
    }
}
