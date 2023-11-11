<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mbookings', function (Blueprint $table) {
            $table->id();
            $table->string('Patient_Name');
            $table->string('Appointment_Address');
            $table->string('Doctor_Name');
            $table->integer('Booking_Date');
            $table->string('Booking_Time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbookings');
    }
};
