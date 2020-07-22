<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    //
    protected $fillable = [
        'title', 'desc','trainer',
    ];

    protected $table='trainings';
}
