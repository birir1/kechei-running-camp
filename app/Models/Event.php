<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'event_date', 'admin_id'];

    public function admin()
{
    return $this->belongsTo(User::class, 'admin_id'); // Assuming 'admin_id' is the foreign key
}
}