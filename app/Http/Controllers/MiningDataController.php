<?php
// app/Http/Controllers/MiningDataController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MiningData;

class MiningDataController extends Controller
{
    /**
     * Store mining data from API request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'gas' => 'required|boolean',
            'frame' => 'required|boolean',
            'vibration' => 'required|boolean',
            'heartbeat' => 'required|integer',
            'temperature' => 'required|integer',
            'humidity' => 'required|integer',
            'card_id' => 'required|string',
        ]);

        $miningData = MiningData::create($request->all());

        return response()->json(['success' => true, 'data' => $miningData], 201);
    }

    /**
     * Display a listing of the mining data.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $miningData = MiningData::all();
        return view('index', compact('miningData'));
    }
}

