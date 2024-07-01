<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningTracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'gas_value',
        'heartrate',
        'flame_detection',
        'vibration_detection',
        'temperature',
        'humidity',
        'location',
        'emergency_button'
    ];
}
