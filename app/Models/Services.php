<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = 'services'; // Ensure this line is present
    protected $fillable = ['title', 'descrtption', 'icon'];
}


