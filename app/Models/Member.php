<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['club_id', 'name', 'post', 'email', 'image', 'phone', 'incharge'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
