<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     use HasFactory;

    protected $fillable = [
        'venue_id',
        'image',
        'name',
        'description',
        'date',
        'time',
        'guests',
    ];


    public function venues()
    {
        return $this->belongsToMany(Venue::class, 'event_venue');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
