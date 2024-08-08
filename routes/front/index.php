<?php

use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\PhonePayController;
use App\Http\Controllers\front\RazorpayController;
use App\Http\Controllers\front\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products/{product}', [ShopController::class, 'show'])->name('products.show');

Route::get('/service', function () {
  return view('front.static.service');
})->name('front.static.service');

Route::group(['middleware' => ['auth']], function () {
  Route::post('/cart/addtocart/{product}', [CartController::class, 'addToCart'])->name('front.cart.addtocart');
  Route::get('/cart/view', [CartController::class, 'view'])->name('front.cart.view');

  Route::get('/cart/shipping/view', [CartController::class, 'shippingView'])->name('front.cart.shipping.view');
  Route::post('/cart/shipping/store', [CartController::class, 'storeShipping'])->name('front.cart.shipping.storeShipping');

  Route::post('/cart/summary', [CartController::class, 'summary'])->name('front.cart.summary');

  Route::get('/cart/remote-item', [CartController::class, 'removeItem'])->name('front.cart.removeItem');


  Route::post("/payment/phonepay/step1", [PhonePayController::class, 'step1'])->name('front.phonepay.step1');



  Route::get("/payment/phonepay/step2/{order}", [PhonePayController::class, 'initiatePayment'])->name('front.phonepay.step2');

  Route::post("/payment/phonepay/check-status", [PhonePayController::class, 'checkStatus'])->name('front.phonepay.checkStatus');

  Route::get('/payment/phonepay/success', [PhonePayController::class, 'success'])->name('front.phonepay.success');
});

Route::middleware(['auth'])->prefix("razorpay")->group(function () {
  Route::get('/payment/{order}', [RazorpayController::class, 'showPaymentForm'])->name('front.razorpay.payment');

  Route::get('/make-payment/{order}', [RazorpayController::class, 'makePayment'])->name('front.razorpay.makePayment');

  Route::match(['get', 'post'], '/payment/validate-payment/{order}', [RazorpayController::class, 'validatePayment'])->name('front.razorpay.validate');

  Route::match(['get', 'post'], '/payment/success/{order}', [RazorpayController::class, 'success'])->name('front.razorpay.success');

  Route::match(['get', 'post'], '/payment/failure/{order}', [RazorpayController::class, 'failure'])->name('front.razorpay.failure');
});
