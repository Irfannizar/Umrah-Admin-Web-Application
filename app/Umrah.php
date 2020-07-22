<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Umrah extends Model
{
    //
    protected $fillable = [
        'agency', 'package','price', 'flight',
    ];

    protected $table='umrah';
}
