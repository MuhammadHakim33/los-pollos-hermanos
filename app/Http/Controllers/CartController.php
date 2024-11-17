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
        $this->cart->add([
            'id' => $request->menu_id, 
            'name' => $request->menu_name, 
            'qty' => 1,
            'price' => $request->menu_price,
            'weight' => 0,
        ])->associate('App\Models\Menu');

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
        // echo $request->menu_id; 
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
}
