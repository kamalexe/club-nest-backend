<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'price',
        'tickets_sold',
        'tickets_available',
    ];


    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
