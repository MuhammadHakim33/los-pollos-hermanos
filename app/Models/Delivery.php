<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Delivery extends Model
{
    use HasUlids;

    protected $table = 'delivery';

    public $incrementing = false;

    protected $guarded = [];
}
