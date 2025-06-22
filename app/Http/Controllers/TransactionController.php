<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;

class TransactionController extends Controller
{
    private $cart;

    public function __construct()
    {
        $this->cart = Cart::instance(auth()->user()->email);

        // Config::$serverKey = config('midtrans.serverKey');
        // Config::$clientKey = config('midtrans.clientKey');
        // Config::$isProduction = config('midtrans.isProduction');
        // Config::$isSanitized = config('midtrans.isSanitized');
        // Config::$is3ds = config('midtrans.is3ds');
    }

    public function create()
    {
        $user = auth()->user();
        $carts = $this->cart->content();
        $subtotal = $this->cart->priceTotal();
        $harga_pengiriman = 10000;
        $diskon = 0;
        $pajak = 1000;
        $total = $subtotal + $harga_pengiriman + $diskon + $pajak;

        return view('user.transaction.index', [
            'user' => $user,
            'carts' => $carts,
            'subtotal' => $subtotal,
            'harga_pengiriman' => $harga_pengiriman,
            'diskon' => $diskon,
            'pajak' => $pajak,
            'total' => $pajak,
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'detail' => 'required',
        ]);

        $carts = $this->cart->content();
        $subtotal = (int)$this->cart->total();

        $items = [];
        foreach($carts as $cart) {
            $items[] = [
                'menu_id' => $cart->id,
                'qty' => $cart->qty,
                'price' => $cart->price,
            ];
        }

        try {
            DB::beginTransaction();

            // insert record order
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'subtotal' => $subtotal,
                'harga_pengiriman' => 10000,
                'pajak' => 1000,
                'status' => 'pending'
            ]);

            // insert record item order
            $order->items()->createMany($items);

            // insert record delivery
            $delivery = $order->delivery()->create(['status' => 'pending']);

            // insert record delivery address
            $delivery->address()->create($input);

            // $params = [
            //     'transaction_details' => [
            //         'order_id' => $order->id,
            //         'gross_amount' => $total,
            //     ],
            //     'customer_details' => [
            //         'first_name' => auth()->user()->name,
            //         'email' => auth()->user()->email,
            //         'phone' => auth()->user()->phone,
            //     ],
            // ];

            // $snapToken = Snap::createTransaction($params);
            // $order->snap_token = $snapToken->token;
            // $order->save();

            DB::commit();
        }
        catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('failed', 'Gagal memesan, mohon ulangi kembali!');
            // throw $th;
        }

        $this->cart->destroy();

        return redirect('order/'.$order->id);
    }

    public function show(Order $order)
    {
        Gate::authorize('order-user', $order);

        return view('user.transaction.detail', ['order' => $order ]);
    }

    public function history()
    {
        $orders = Order::with(['delivery', 'items'])
                ->where('user_id', auth()->user()->id)
                ->orderBy('created_at', 'desc')->get();
        $carts = Cart::instance(auth()->user()->email)->content();
        $total = Cart::priceTotal();

        return view('user.transaction.history',  [
            'orders' => $orders,
            'carts' => $carts,
            'total' => $total,
        ]);
    }
}
