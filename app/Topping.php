<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Topping extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'products_id',
        'name',
        'price'
    ];

    protected $hidden= [

    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    // public function product()
    // {
    //     return $this->belongsTo(Product::class, 'products_id', 'id');
    // }

}
