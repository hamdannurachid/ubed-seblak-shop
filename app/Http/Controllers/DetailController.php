<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Topping;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Product::with(['toppings'])->get();
        $item = Product::with(['galleries'])->where('slug', $slug)->firstOrFail();

        return view('pages.detail', [
            'item' => $item
        ]);
    }

    public function addTopping()
    {

    }
}
