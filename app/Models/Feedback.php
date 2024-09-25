<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // Define which fields are fillable for mass assignment
    protected $fillable = ['name', 'email', 'message'];
}