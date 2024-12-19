<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\Observers\OrderObserver;

#[ObservedBy(OrderObserver::class)]
class Order extends Model
{
    public $incrementing = false;

    protected $fillable = [
        'total',
        'status'
    ];

    public function delivery()
    {
        return $this->hasOne(Delivery::class);
    }

    public function itemOrder()
    {
        return $this->hasMany(ItemOrder::class);
    }
}
