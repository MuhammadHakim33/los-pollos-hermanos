<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    private $cart;

    public function __construct()
    {
        $this->cart = Cart::instance(auth()->user()->email);
        dump($this->cart->count());

        if($this->cart->count() == 0) {
            return redirect('/');
            // dump("Tes");
        }
    }

    public function checkout()
    {
        $user = auth()->user()->load('address');
        $carts = $this->cart->content();
        $total_price = $this->cart->priceTotal();
        $total_pay = $this->cart->total();
        // dump($carts);
        // dd($user->name);
        // foreach ($address as $x) {
        //     echo $x;
        // }
        // die;
        return view('user.checkout.index', [
            'user' => $user,
            'carts' => $carts,
            'total_price' => $total_price,
            'total_pay' => $total_pay,
        ]);
    }
}
