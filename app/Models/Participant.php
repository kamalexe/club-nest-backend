<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ParticipantsType;
use App\ParticipantsType as AppParticipantsType;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'participants_type'];

    protected $casts = [
        'participants_type' => AppParticipantsType::class,
    ];
}
