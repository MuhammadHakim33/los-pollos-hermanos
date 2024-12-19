<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Delivery extends Model
{
    use HasUlids;

    public $incrementing = false;

    protected $fillable = [
        'status',
    ];
}
