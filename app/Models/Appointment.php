<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{   
    use HasFactory;
    protected $table = 'appointments';
    protected $fillable = [
        'name',
        'age',
        'address',
        'phone',
        'email',
        'doctor_name',
        'department',
        'date_time',
        'notes',
    ];

}
