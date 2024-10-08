<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingPlan extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'admin_id'];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id'); // Assuming the admin is a user
    }
}