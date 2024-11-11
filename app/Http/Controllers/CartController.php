<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Binafy\LaravelCart\Models\Cart;
use \Binafy\LaravelCart\Models\CartItem;
use App\Models\Menu;

class CartController extends Controller
{
    private $cart = '';
    private $itemableclass = Menu::class;

    public function __construct()
    {
        $this->cart = Cart::query()->firstOrCreate(['user_id' => auth()->user()->id]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $cartitem = CartItem::where('cart_id', $this->cart->id)
                            ->where('itemable_id', $request->menu_id)
                            ->first();

        if($cartitem) {
            $menu = Menu::find($cartitem->itemable_id);
            $this->cart->increaseQuantity($menu, 1);

            return back();
        }
        
        $cartItem = new CartItem([
            'itemable_id' => $request->menu_id,
            'itemable_type' => $this->itemableclass,
            'quantity' => 1,
        ]);

        $this->cart->items()->save($cartItem);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo $request->menu_id; 
    }

    public function decrease(string $id)
    {
        $cart = CartItem::find($id);
        
        if($cart->quantity == 1) {
            return back();
        }

        $this->cart->decreaseQuantity($cart, 1);
        return back();
    }

    public function increase(string $id)
    {
        $cart = CartItem::find($id);
        $this->cart->increaseQuantity($cart, 1);
        return back();
    }

    public function destroy(string $id)
    {
        $cart = CartItem::find($id);
        $this->cart->removeItem($cart);
        return back();
    }
}
