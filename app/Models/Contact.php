<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact'; // Ensure this line is present
    protected $fillable = ['name', 'email', 'mobile', 'message'];
}
