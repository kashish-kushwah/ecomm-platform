<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, Product $product)
    {   
        $data = $request->validate([
            'qty' => 'required',
        ]);
        $cart = Cart::where(['user_id' => auth()->user()->id, 'product_id' => $product->id])->first();
        if ($cart) {
            $cart->qty += $data['qty'];
            $cart->save();
        } else {
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->product_id = $product->id;
            $cart->qty = $data['qty'];
            $cart->price = $product->price;
            $cart->save();
        }

        return redirect()->back()->with('success', 'Product added to cart successfully');
    }

    public function view(){
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        return view("front.cart.view",['carts' => $carts]);
    }
}
    