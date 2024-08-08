<?php

namespace App\Http\Controllers\front;

use App\Helpers\CartHelper;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Services\PhonePeService;
use Illuminate\Http\Request;

class PhonePayController extends Controller
{
    protected $phonePeService;

    public function __construct(PhonePeService $phonePeService)
    {
        $this->phonePeService = $phonePeService;
    }
    
    public function step1(Request $request)
    {
        $userID = auth()->user()->id;
        // create order
        $order = Order::where(['user_id' => $userID, 'order_status' => 'pending'])->first();
        if (!$order) {
            $order = new Order;
            $order->user_id = $userID;
            $order->shipping_amount = 0;
            $order->items_amount = CartHelper::getCartTotal($userID);
            $order->total_amount = $order->items_amount + $order->shipping_amount;
            $order->order_status = 'pending';
        } else {
            $order->shipping_amount = 0;
            $order->items_amount = CartHelper::getCartTotal($userID);
            $order->total_amount = $order->items_amount + $order->shipping_amount;
        }
        $order->save();
        // order details main entry
        $cart = Cart::where("user_id", $userID)->get();
        if ($cart) {
            foreach ($cart as $row) {
                $orderDetail = OrderDetail::where(["order_id" => $order->id, 'product_id' => $row->product_id])->first();
                if ($orderDetail) {
                    $orderDetail->qty = $row->qty;
                    $orderDetail->price = $row->price;
                } else {
                    $orderDetail = new OrderDetail;
                    $orderDetail->order_id = $order->id;
                    $orderDetail->product_id = $row->product_id;
                    $orderDetail->title = $row->product->title;
                    $orderDetail->price = $row->price;
                    $orderDetail->qty = $row->qty;
                }
                $orderDetail->save();
            }
        }
        return redirect()->route("front.phonepay.step2",$order->id);
    }

    public function initiatePayment(Order $order)
    {
        $amount = $order->total_amount; // amount in INR
        $orderId = $order->id;

        $response = $this->phonePeService->initiatePayment($amount, $orderId);

        if ($response['success']) {
            return redirect($response['data']['paymentUrl']);
        }

        return redirect()->back()->with('error', 'Unable to initiate payment. Please try again.');
    }

    public function checkStatus(Request $request){
        dd($request);
    }

    public function paymentSuccess(Request $request)
    {
        // Handle payment success
        return view('front.phonepay.success');
    }

    public function paymentCallback(Request $request)
    {
        // Handle payment callback
        $data = $request->all();
        dd($data);
        // Verify the callback data and process the payment status
    }
}
