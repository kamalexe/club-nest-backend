<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = ['club_id', 'name', 'email', 'role'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
