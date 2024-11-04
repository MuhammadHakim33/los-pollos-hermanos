<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Binafy\LaravelCart\Models\CartItem;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        // $carts = CartItem::select('cart_id', 'itemable_id', 'itemable_type', DB::raw('SUM(quantity) as total_quantity'))
        //         ->groupBy('itemable_id')
        //         ->groupBy('itemable_type')
        //         ->groupBy('cart_id')
        //         ->get();
        $carts = CartItem::select('cart_id', 'itemable_id', 'itemable_type', DB::raw('SUM(quantity) as total_quantity'))
                ->groupBy('itemable_id')
                ->groupBy('itemable_type')
                ->groupBy('cart_id')
                ->get();
        // $carts = CartItem::all();
        // $total = $carts->itemable->sum('price');

        return view('user.home.index', [
            'menus' => $menus,
            'carts' => $carts
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
