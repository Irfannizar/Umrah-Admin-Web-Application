<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'date', 'name','email','package', 'price',
    ];

    protected $table='orders';
}
