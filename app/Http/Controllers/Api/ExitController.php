<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\ParkingFloor;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class ExitController extends Controller
{
    function index(Request $request)
    {
        $parkingFloor = ParkingFloor::find($request->parking_floor_id);
        Vehicle::find($request->vehicle_id)->delete();
        
        if($request->car_type == 1){
            $parkingFloor->car = $parkingFloor->car-1;
            $parkingFloor->remaining_capacity = $parkingFloor->remaining_capacity+1;

        }
        else if($request->car_type == 2){
            $parkingFloor->truck = $parkingFloor->truck-1;
            $parkingFloor->remaining_capacity = $parkingFloor->remaining_capacity+1;
        }
        else if($request->car_type == 3){
            $parkingFloor->motor_cycle = $parkingFloor->motor_cycle-1;
            $parkingFloor->remaining_capacity = $parkingFloor->remaining_capacity+1;
        }
        else if($request->car_type == 4){
            $parkingFloor->van = $parkingFloor->van-1;
            $parkingFloor->remaining_capacity = $parkingFloor->remaining_capacity+1;
        }
        $parkingFloor->save();

        return response()->json([
            'success' => true,
            'Message' => "Your Vehicle Was Exit SuccessFully"
        ]);
    }
}
