<?php

use App\Http\Controllers\front\CartController;
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
  
});


