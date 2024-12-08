<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemOrder extends Model
{
    protected $table = 'item_order';

    protected $fillable = [
        'id_order',
        'id_menu',
        'qty',
        'price',
        'created_at',
        'updated_at',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
