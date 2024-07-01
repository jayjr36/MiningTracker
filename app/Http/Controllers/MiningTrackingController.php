<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MiningTracking;


class MiningTrackingController extends Controller
{

    public function index()
    {
        $data = MiningTracking::all();
        return view('index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'gas_value' => 'required|numeric',
            'heartrate' => 'required|integer',
            'flame_detection' => 'required|boolean',
            'vibration_detection' => 'required|boolean',
            'temperature' => 'required|numeric',
            'humidity' => 'required|numeric',
            'location' => 'required|string',
            'emergency_button' => 'required|boolean'
        ]);

        MiningTracking::create($data);

        return response()->json(['message' => 'success'], 201);
    }
}
