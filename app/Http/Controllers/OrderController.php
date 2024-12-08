<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
// use Illuminate\Support\Carbon;
// use App\Models\ItemOrder;
// use App\Models\Payment;
// use App\Models\Delivery;

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
                    'id_menu' => $cart->id,
                    'qty' => $cart->qty,
                    'price' => $cart->price,
                ];
            }
            $order->itemOrder()->createMany($items);
            
            // insert record delivery
            $delivery = $order->delivery()->create(['status' => 'pending']);

            DB::commit();
        } 
        catch (\Throwable $th) {
            DB::rollBack();
            // throw $th;
            return back()->with('failed', 'Gagal memesan, mohon ulangi kembali!');
        }

        $this->cart->destroy();

        return redirect('/order/'.$order->id);
    }

    public function detail(Order $order)
    {
        Gate::authorize('order-user', $order);

        return view('user.checkout.detail', ['order' => $order]);
    }
}
