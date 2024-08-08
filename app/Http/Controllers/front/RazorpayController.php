<?php

namespace App\Http\Controllers\front;

use App\Helpers\CartHelper;
use App\Helpers\CheckoutHelper;
use App\Http\Controllers\Controller;
use App\Mail\OrderConfirm;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Razorpay\Api\Api;

class RazorpayController extends Controller
{
  public function showPaymentForm(Order $order)
  {
    return view('front.razorpay.razorpay', ['order' => $order]);
  }

  public function makePayment(Order $order)
  {

    $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    $amount = (int) $order->total_amount * 100;

    $rpOrder = $api->order->create([
      'amount' => $amount,
      'currency' => 'INR',
      'payment_capture' => 1,
    ]);

    $order->razorpay_order_id = $rpOrder['id'];
    $order->save();

    $orderId = $rpOrder['id'];

    return view('front.razorpay.razorpay', [
      'orderId' => $orderId,
      'amount' =>  $amount,
      'order' => $order
    ]);
  }

  public function validatePayment(Request $request, Order $order)
  {
    $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    $paymentDetails = $api->payment->fetch($request->razorpay_payment_id)->toArray();
    $status = Arr::get($paymentDetails, 'status');

    if ($status == 'authorized') {
      CartHelper::emptyCart(Auth::user()->id);
      $order->razorpay_payment_id = $request->razorpay_payment_id;
      $order->order_status = "paid";
      $order->save();
      // send order confirm email
      Mail::to($order->user->email)->send(new OrderConfirm($order));
      return redirect()->route('front.razorpay.success', ['order' => $order]);  
    } else {
      return redirect()->route("front.razorpay.failure", ['order' => $order]);
    }
    
  }

  public function success(Order $order){
    return view('front.razorpay.success', ['order' => $order]);
  }

  public function paymentFailure(Order $order)
  {
    return view('front.razorpay.failure', ['order' => $order]);
  }
}
