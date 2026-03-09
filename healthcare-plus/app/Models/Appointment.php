<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    
//database 

    protected $fillable = [
        'patient_name',
        'email',
        'doctor',
        'appointment_date',
        'time_slot',
        'phone',
        'notes',

    ];

}