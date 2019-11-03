<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'id_users', 'date', 'time', 'location_up', 'location_down','seat_amount', 'seat_amount', 'price', 'category', 'status'
    ];
}
