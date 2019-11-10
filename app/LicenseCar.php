<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicenseCar extends Model
{
    protected $fillable = [
        'id_users', 'car_id', 'brand_car', 'model_car', 'color_car', 'number_seats'
    ];
}
