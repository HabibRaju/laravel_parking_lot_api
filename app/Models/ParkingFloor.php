<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingFloor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'total_capacity', 'remaining_capacity'];
}
