<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travels extends Model
{
    protected $fillable = [
        'id_users', 'id_license_car', 'date', 'time_start', 'location_up', 'location_down','seat_amount', 'seat_empty', 'price', 'status'
    ];
}
