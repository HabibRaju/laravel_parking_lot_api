<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\ParkingFloor;
use Illuminate\Http\Request;

class ParkingFloorController extends Controller
{
    function index()
    {
        $data = ParkingFloor::all();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4|unique:parking_floors',
            'total_capacity' => 'required|min:1',
            
        ]);


        $parkingFloor = ParkingFloor::create([
            'name' => $request->name,
            'total_capacity' => $request->total_capacity,
            'remaining_capacity' => $request->total_capacity
        ]);

        return response()->json([
            'success' => true,
            'Message' => "Parking Floor Saved Successfully"
        ]);
    }

    function show(Request $request)
    {
        $parkingFloor = ParkingFloor::find($request->id);

        return response()->json([
            'success' => true,
            'Parking Floor' => $parkingFloor
        ]);
    }
}
