<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show(Product $product)
    {
       // $product = Product::findOrFail($product->Id);
        return view('front.product.show', ['product' => $product]);
    }
}
