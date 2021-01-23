<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=[
        'name',
        'degree',
        'chamber_location',
        'specialist',
        'hospital_name',
        'visiting_day',
        'visiting_time',
        'phone_number',
        'price'
    ];
}
