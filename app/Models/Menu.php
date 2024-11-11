<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Binafy\LaravelCart\Cartable;
use \Binafy\LaravelCart\Models\CartItem;

class Menu extends Model implements Cartable
{
    protected $table = 'menu';

    public function getPrice(): int
    {
        return $this->attributes['price'];
    }

    public function carts()
    {
        return $this->morphMany(CartItem::class, 'itemable');
    }
}
