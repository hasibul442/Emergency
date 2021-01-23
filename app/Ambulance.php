<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    protected $fillable=[
        'driver_name',
        'driver_phone',
        'hospital_name',
        'location',
        'ambulance_type',
        'price',
    ];
}
