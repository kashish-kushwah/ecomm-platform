<?php

namespace App\Helpers;

use App\Models\Cart;

class CartHelper
{
  public static function getCartTotal(int $userID): float
  {
    $total = 0.00;
    $cart = Cart::where("user_id", $userID)->get();
    if ($cart) {
      foreach ($cart as $row) {
        $total += ($row->price * $row->qty);
      }
    }
    return $total;
  }

  public static function emptyCart(int $userID): bool
  {
    Cart::where("user_id", $userID)->delete();
    return true;
  }
}
