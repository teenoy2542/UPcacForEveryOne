<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = [
        'travel_id', 'status', 'location_up', 'location_down', 'seat_amount', 'time_start', 'price', 'car_id'
    ];
}
