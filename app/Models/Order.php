<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\Observers\OrderObserver;

#[ObservedBy(OrderObserver::class)]
class Order extends Model
{
    protected $table = 'orders';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'id_user',
        'total',
        'status'
    ];

    public function delivery()
    {
        return $this->hasOne(Delivery::class, 'id_order');
    }

    public function itemOrder()
    {
        return $this->hasMany(ItemOrder::class, 'id_order');
    }
}
