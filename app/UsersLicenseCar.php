<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersLicenseCar extends Model
{
    protected $fillable = [
        'idUsers', 'license_car'
    ];
}
