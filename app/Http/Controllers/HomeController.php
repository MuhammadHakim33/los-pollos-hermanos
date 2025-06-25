<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class HomeController extends Controller
{
    public function __invoke()
    {
        // $foods = Menu::where('status', 'available')
        //             ->where('category', 'food')
        //             ->get();
        // $drinks = Menu::where('status', 'available')
        //             ->where('category', 'drink')
        //             ->get();
        $menus = Menu::where('status', 'available')->get();
        $carts = [];
        $subtotal = 0;
        $category = ['hemat', 'kombo', 'ayam', 'burger', 'camilan', 'minuman', 'eskrim'];

        if(auth()->user()) {
            $carts = Cart::instance(auth()->user()->email)->content();
            $subtotal = Cart::priceTotal();
        }

        return view('user.home.index', [
            // 'foods' => $foods,
            // 'drinks' => $drinks,
            'carts' => $carts,
            'subtotal' => $subtotal,
            'category' => $category,
            'menus' => $menus,
        ]);
    }

}
