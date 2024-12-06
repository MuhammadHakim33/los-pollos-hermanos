<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Gloudemans\Shoppingcart\Facades\Cart;

class EnsureCartFilled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $cart = Cart::instance(auth()->user()->email);

        if($cart->count() == 0) {
            return redirect('/');
        }

        return $next($request);
    }
}
