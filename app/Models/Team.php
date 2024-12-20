<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'event_id', 'leader_name', 'leader_email', 'leader_phone', 'leader_semester', 'leader_branch'];

    // Relationship: Each team belongs to an event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    // Relationship: Each team has many participants
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
