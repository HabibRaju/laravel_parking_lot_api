<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ParkingFloor;
use Illuminate\Http\Request;

class ParkingLotController extends Controller
{
    public function index()
    {
        $data =[
            'name' => "Commercial Parking Group.",
            'address' => "Dahaka, Bangladesh."
        ];
        $parkingFloor = ParkingFloor::all();

        return response()->json([
            'success' => true,
            'Parking Lot Data' => $data,
            'Parking Floor'    =>  $parkingFloor
        ]);
    }
}
