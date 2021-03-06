<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    //
    protected $table = 'zones';
    protected $fillable = [
        // Foreign keys
        'city_id',
        // Data
        'name',
    ];
}
