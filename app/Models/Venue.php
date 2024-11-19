<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venue extends Model
{

    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'description',
        'max_capacity',
        'ticket_price',
        'location',
    ];


    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_venue');
    }
}
