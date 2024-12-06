<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Order;
use App\Models\ItemOrder;
use App\Models\Payment;
use App\Models\Delivery;

class OrderController extends Controller
{
    private $cart;

    public function __construct()
    {
        $this->cart = Cart::instance(auth()->user()->email);
    }

    public function checkout()
    {
        $user = auth()->user()->load('address');
        $carts = $this->cart->content();
        $total_price = $this->cart->priceTotal();
        $total_pay = $this->cart->total();
        
        return view('user.checkout.index', [
            'user' => $user,
            'carts' => $carts,
            'total_price' => $total_price,
            'total_pay' => $total_pay,
        ]);
    }

    public function order(Request $request)
    {
        // dump($this->generateOrderCode());
        // dump(Str::ulid());
        // die;
        $id_user = auth()->user()->id;
        $carts = $this->cart->content();
        $total = $this->cart->total();
        $method_payment = $request->method_payment;
        $items = [];

        // DB::transaction(function () use($id_user, $carts) {
        //     $order = Order::create([
        //         'id' => $this->generateOrderCode(),
        //         'id_user' => $id_user,
        //         'status' => 'pending'
        //     ]);

        //     foreach($carts as $cart) {
        //         $item = [];
        //         $item['id_order'] = $order->id;
        //         $item['id_menu'] = $cart->id;
        //         $item['qty'] = $cart->qty;
        //         $item['price'] = $cart->price;
        //         $items[] = $item;
        //     }

        //     ItemOrder::create($items);

        //     Delivery::create([
        //         'id' => Str::ulid(),
        //         'id_order' => $order->id,
        //         'status' => 'pending'
        //     ]);

        //     Payment::create([
        //         'id' => $this->generatePaymentCode(),
        //         'id_order' => $order->id,
        //         'method_payment' => $method_payment,
        //         'total' => $total,
        //         'status' => 'pending'
        //     ]);
        // });
    }

    function generateOrderCode() 
    {
        return 'ORD-'.Carbon::now()->format('Ymd').'-'.Str::upper(Str::random(5));
    }

    public function generatePaymentCode()
    {
        $prefix = date('Ymd');
        $randomNumber = rand(1000, 9999);
        return $prefix.$randomNumber;
    }
}
