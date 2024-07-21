<?php

// app/Models/MiningData.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningData extends Model
{
    use HasFactory;

    protected $fillable = [
        'gas',
        'frame',
        'vibration',
        'heartbeat',
        'temperature',
        'humidity',
        'card_id',
    ];
}
