<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incharge extends Model
{
    use HasFactory;

    protected $fillable = ['club_id', 'member_id'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
