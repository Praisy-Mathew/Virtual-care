<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors'; // Ensure this line is present
    protected $fillable = ['name', 'department', 'image', 'location' ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department');
    }
}
