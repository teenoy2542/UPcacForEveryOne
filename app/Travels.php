<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travels extends Model
{
    protected $fillable = [
        'user_id', 'date', 'time_start', 'location_up', 'location_down','seat_amount', 'seat_empty', 'price', 'category', 'status'
    ];
}
