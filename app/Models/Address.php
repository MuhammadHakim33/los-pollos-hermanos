<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'user_address';

    protected $fillable = [
        'id_user',
        'detail',
        'kecamatan',
        'kelurahan',
    ];

}
