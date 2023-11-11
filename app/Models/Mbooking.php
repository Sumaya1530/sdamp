<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mbooking extends Model
{
    use HasFactory;
    protected $table = 'mbookings';
    protected $fillable = ['id','Patient_Name','Appointment_Address','Doctor_Name','Booking_Date','Booking_Time',];
}
