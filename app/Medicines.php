<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicines extends Model
{
    protected $fillable=[
        'id',
        'name',
        'g_name',
        'm_type',
        'power',
        'company',
        'price'
    ];
}
