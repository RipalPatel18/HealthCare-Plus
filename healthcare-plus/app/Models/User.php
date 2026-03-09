<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Department;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //database
    protected $fillable = [

        'name',
        'email',
        'password',
        'role',
        'department_id',
        'location',
        'image',
        'phone',
        'address',
    ];

    protected $hidden = [
        
        'password',
        'remember_token',

    ];

    protected function casts(): array

    {
        return [

            'email_verified_at' => 'datetime',

            'password' => 'hashed',
        ];
    }

    public function department()
    {
        
        return $this->belongsTo(Department::class);
    }
}