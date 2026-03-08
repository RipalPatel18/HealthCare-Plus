<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Service;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Doctors in this department
    public function doctors()
    {
        return $this->hasMany(User::class, 'department_id');
    }

    // Services in this department
    public function services()
    {
        return $this->hasMany(Service::class, 'department_id');
    }
}