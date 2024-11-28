<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Event extends Model
{
     use HasFactory;

    protected $fillable = [
        'club_id',
        'image',
        'name',
        'description',
        'date',
        'time',
        'guests',
        'max_capacity',
        'location',
        'ticket_price'
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    protected function dayName(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => Carbon::parse($attributes['date'])->format('l')
        );
    }

   protected function formattedDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => Carbon::parse($attributes['date'])->format('Y-m-d') // Change format as needed
        );
    }

    protected function formattedTime(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => Carbon::parse($attributes['time'])->format('h:i A') // 12-hour format with AM/PM
        );
    }

}
