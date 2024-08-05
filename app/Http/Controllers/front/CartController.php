<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Address;
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

    public function shippingView(){
        $items = Address::where(['user_id' => auth()->user()->id,'status' => 1])->get();
        return view("front.cart.shipping-view",['items' => $items]);
    }

    public function storeShipping(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'address_line1'=> 'nullable',
            'address_line2'=> 'nullable',
            'address_city'=> 'nullable',
            'address_state'=> 'nullable',
            'address_country'=> 'nullable',
            'address_zipcode'=> 'nullable',
        ]);
        $data['user_id'] = auth()->user()->id;
        Address::create($data);
        return redirect()->back()->with("success","Address added");
    }

    public function summary(Request $request){
        $_SESSION['shipping_address_id'] = $request->selected_address;
        $address = Address::where('id', $_SESSION['shipping_address_id'])->first();
        $carts = Cart::where("user_id", auth()->user()->id)->get();
        return view("front.cart.summary", ['carts' => $carts,'address' => $address]);
    }
}
    