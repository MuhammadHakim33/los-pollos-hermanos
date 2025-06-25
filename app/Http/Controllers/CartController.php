<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Menu;

class CartController extends Controller
{
    private $itemableclass = Menu::class;
    private $cart;

    public function __construct()
    {
        $this->cart = Cart::instance(auth()->user()->email);
    }

    public function store(Request $request)
    {
        $this->cart->add([
            'id' => $request->menu_id,
            'name' => $request->menu_name,
            'qty' => 1,
            'price' => $request->menu_price,
            'weight' => 0,
        ])->associate('App\Models\Menu');

        return back();
    }

    public function decrease(Request $request, string $id)
    {
        if ($request->qty > 1) {
            $this->cart->update($id, $request->qty - 1);
        }
        return back();
    }

    public function increase(Request $request, string $id)
    {
        $this->cart->update($id, $request->qty + 1);
        return back();
    }

    public function destroy(string $id)
    {
        $this->cart->remove($id);
        return back();
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'qty' => 'required|integer|min:1'
        ]);

        $this->cart->update($id, $request->qty);
        return back();
    }
}
