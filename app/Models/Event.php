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
            get: fn($value, $attributes) => Carbon::parse($attributes['date'])->format('l')
        );
    }

    protected function formattedDate(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => \Carbon\Carbon::parse($attributes['date'])->format('l, F jS, Y'), // Example: Thursday, March 31st, 2022
            set: fn($value) => \Carbon\Carbon::createFromFormat('Y-m-d', $value)->toDateString() // Ensure stored format is 'Y-m-d'
        );
    }
    protected function formattedDate1(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => \Carbon\Carbon::parse($attributes['date'])->format('F jS'), // Example: Thursday, March 31st, 2022
            set: fn($value) => \Carbon\Carbon::createFromFormat('Y-m-d', $value)->toDateString() // Ensure stored format is 'Y-m-d'
        );
    }

    protected function formattedTime(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => Carbon::parse($attributes['time'])->format('h:i A') // 12-hour format with AM/PM
        );
    }
    public function pictures()
    {
        return $this->hasMany(EventPicture::class);
    }
}
