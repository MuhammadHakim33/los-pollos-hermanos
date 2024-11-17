<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use \Binafy\LaravelCart\Models\CartItem;
// use \Binafy\LaravelCart\Models\Cart;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $carts = [];
        $total_price = 0;

        if(auth()->user()) {
            $carts = Cart::instance(auth()->user()->email)->content();
            $total_price = Cart::priceTotal();
            // dump(Cart::instance(auth()->user()->email)->content());
        }

        return view('user.home.index', [
            'menus' => $menus,
            'carts' => $carts,
            'total_price' => $total_price,
        ]);
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
        //
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
