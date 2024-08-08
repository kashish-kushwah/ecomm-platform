@extends('layouts.app')
@section('pageTitle', 'Make Payment')
@section('content')
  <div class="container padding-large">
    <form action="{{ route('front.razorpay.validate', $order->id) }}" method="post">
      @csrf
      <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZORPAY_KEY') }}"
        data-amount="{{ $order->total_amount*100 }}" data-currency="INR" data-name="My Store" data-description="Test Transaction"
        data-image="https://your-awesome-site.com/logo.png" data-prefill.name="John Doe"
        data-prefill.email="johndoe@example.com" data-theme.color="#F37254"></script>
      <input type="hidden" value="{{ $order->id }}" name="razorpay_order_id">
      <input type="hidden" value="INR" name="razorpay_currency">
      <input type="hidden" value="{{ $order->total_amount*100 }}" name="razorpay_amount">
      <input type="hidden" value="My Store" name="razorpay_merchant_name">
      <input type="hidden" value="Payment for Order ID: {{ $order->id }}" name="razorpay_description">
      <input type="hidden" value="{{ route('front.razorpay.failure', $order->id) }}" name="razorpay_cancel_url">
    </form>
  </div>
@endsection

@section("footer-script")
<script>
$(document).ready(function(){
  $('.razorpay-payment-button').trigger('click');
});
</script>
@endsection
