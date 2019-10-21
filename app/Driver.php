<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'uid', 'email', 'date', 'time', 'place1', 'number', 'price', 'place2'
    ];
}
