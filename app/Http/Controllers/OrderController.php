<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
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
        $carts = $this->cart->content();
        $total = (int)$this->cart->total();
        $method_payment = $request->method_payment;

        try {
            DB::beginTransaction();

            // insert record order
            $order = Order::create([
                'id_user' => auth()->user()->id,
                'total' => $total,
                'status' => 'pending'
            ]);

            // insert record item order
            $items = [];
            foreach($carts as $cart) {
                $items[] = [
                    'id_order' => $order->id,
                    'id_menu' => $cart->id,
                    'qty' => $cart->qty,
                    'price' => $cart->price,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
            ItemOrder::insert($items);
            
            // insert record delivery
            Delivery::create([
                'id_order' => $order->id,
                'status' => 'pending'
            ]);

            DB::commit();
        } 
        catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        dd($order->id);

        // $order = new Order([
        //     'id_user' => auth()->user()->id,
        //     'total' => $total,
        //     'status' => 'pending'
        // ]);

        // DB::transaction(function () use($order, $carts) {
        //     $order->save();

        //     $items = [];
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
        //         'id_order' => $order->id,
        //         'status' => 'pending'
        //     ]);
        // });

        // dd($order->id);

        // dd($total);

         // dump($this->generateOrderCode());
        // dump(Str::ulid());
        // die;
        // $id_user = auth()->user()->id;

        // dump($order);
        // dump($item_order);
        // dump($delivery);
        // die;


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
}
