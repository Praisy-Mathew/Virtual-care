<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments'; // Ensure this line is present
    protected $fillable = ['name', 'icon', 'description' ];
    
    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'department'); // or 'department' if not renamed
    }
}
