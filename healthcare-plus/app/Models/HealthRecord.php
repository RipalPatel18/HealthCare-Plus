<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class HealthRecord extends Model
{
    protected $fillable = [
        'user_id',
        'patient_id',
        'doctor_id',
        'record_type',
        'record_date',
        'diagnosis',
        'details',
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
}