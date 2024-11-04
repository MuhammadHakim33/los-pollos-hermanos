<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Binafy\LaravelCart\Models\Cart;
use \Binafy\LaravelCart\Models\CartItem;
use App\Models\Menu;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $menu = Menu::find(1);

        // $cart = Cart::query()->firstOrCreateWithStoreItems(
        //     item: $menu,
        //     quantity: 1,
        //     userId: Auth::user()->id
        // );

        // $cartItem = new CartItem([
        //     'itemable_id' => 1,
        //     'itemable_type' => 'App\Models\Menu',
        //     'quantity' => 1,
        // ]);
        
        // $cartItem->itemable()->first();

        // dd($cartItem);

        // dd(Menu::all());
        // foreach (Menu::all() as $menu) {
        //     echo $menu->carts;
        // }

        // $cart = [];

        // foreach (CartItem::all() as $item) {
        //     $cart = $item->itemable;
        // }

        // return $cart;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cart = Cart::query()->firstOrCreate(['user_id' => auth()->user()->id]);

        $cartItem = new CartItem([
            'itemable_id' => $request->menu_id,
            'itemable_type' => Menu::class,
            'quantity' => 1,
        ]);

        $cart->items()->save($cartItem);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
