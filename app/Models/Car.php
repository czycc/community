<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'location', 'price', 'status', 'user', 'car_id', 'more'
    ];
}
