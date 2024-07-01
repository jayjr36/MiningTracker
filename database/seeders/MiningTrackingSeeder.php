<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MiningTracking;
class MiningTrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MiningTracking::create([
            'gas_value' => 5.6,
            'heartrate' => 78,
            'flame_detection' => true,
            'vibration_detection' => false,
            'temperature' => 35.5,
            'humidity' => 60,
            'location' => 'Mine Shaft 1',
            'emergency_button' => false,
        ]);

        MiningTracking::create([
            'gas_value' => 7.8,
            'heartrate' => 85,
            'flame_detection' => false,
            'vibration_detection' => true,
            'temperature' => 30.0,
            'humidity' => 55,
            'location' => 'Mine Shaft 2',
            'emergency_button' => true,
        ]);
    }
}
