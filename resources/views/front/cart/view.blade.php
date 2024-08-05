@extends("layouts.app")
@section("content")
@php
$subtotal = 0.00;
$alt = 0;
@endphp

<div class="padding-large">
    
    <div class="container">
    <h1>Your Cart....</h1>
        <div class="row bg-dark text-light">
            <div class="col-2">Image</div>
            <div class="col-3">Name</div>
            <div class="col-2">Qty</div>
            <div class="col-2">Price</div>
            <div class="col-3 text-end">Amount</div>
        </div>
        @foreach($carts as $cart)
        @php
        $subtotal += $cart->product->price * $cart->qty;
        $alt++;
        @endphp
        <div class="row mt-2 {!! $alt %2 == 0 ? 'bg-light' : 'bg-secondary bg-gradient' !!}">
            <div class="col-2 px-3 py-1"><img src="{{ asset('images/products/'.$cart->product->image) }}" width="100" /></div>
            <div class="col-3 px-3 py-1">{{ $cart->product->title }}</div>
            <div class="col-2 px-3 py-1">{{ $cart->qty }}</div>
            <div class="col-2 px-3 py-1">{{ $cart->product->price }}</div>
            <div class="col-3 px-3 py-1 text-end">${{ number_format($cart->product->price * $cart->qty, 2) }}</div>
        </div>
        @endforeach
        <div class="row bg-dark text-light">
            <div class="col-11 text-end px-3 py-1">
                <b>Subtotal:</b>
            </div>
            <div class="col-1 px-3 py-1 text-end">
                ${{$subtotal}}
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-end">
                <a class="btn btn-primary" href="{{ route('front.cart.shipping.view')}}">Proceed To Checkout</a>
            </div>
        </div>
    </div>
</div>
@endsection