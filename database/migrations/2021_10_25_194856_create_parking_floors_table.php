<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingFloorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_floors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('car')->default(0);
            $table->integer('truck')->default(0);;
            $table->integer('motor_cycle')->default(0);;
            $table->integer('van')->default(0);;
            $table->integer('total_capacity');
            $table->integer('remaining_capacity')->default(0);;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parking_floors');
    }
}
