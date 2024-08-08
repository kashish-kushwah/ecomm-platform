@extends('layouts.app')
@section('content')
  @php
    $subtotal = 0.0;
    $alt = 0;
  @endphp

  <div class="padding-large">

    <div class="container">
      <h1>Review your order</h1>
      <div class="row bg-dark text-light">
        <div class="col-2">Image</div>
        <div class="col-3">Name</div>
        <div class="col-2">Qty</div>
        <div class="col-2">Price</div>
        <div class="col-3 text-end">Amount</div>
      </div>
      @foreach ($carts as $cart)
        @php
          $subtotal += $cart->product->price * $cart->qty;
          $alt++;
        @endphp
        <div class="row mt-2 {!! $alt % 2 == 0 ? 'bg-light' : 'bg-secondary bg-gradient' !!}">
          <div class="col-2 px-3 py-1"><img src="{{ asset('images/products/' . $cart->product->image) }}" width="100" />
          </div>
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
          ${{ $subtotal }}
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-9 text-end">
          <h4>Shipping address</h4>
          <div>Address Type: {{ $address->title }}</div>
          <div>Address Line1: {{ $address->address_line1 }}</div>
          <div>Address Line2: {{ $address->address_line2 }}</div>
          <div>City: {{ $address->address_city }}</div>
          <div>State: {{ $address->address_state }}</div>
          <div>Country: {{ $address->address_country }}</div>
          <div>Zipcode: {{ $address->address_zipcode }}</div>
        </div>
        <div class="col-3 text-end">
          <form action="{{ route('front.razorpay.payment', $order->id) }}" method="get">
            @csrf
            <button type="submit" class="btn btn-primary">Make Payment</button>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
