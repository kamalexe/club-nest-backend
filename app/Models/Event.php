<?php

namespace App\Models;

use App\EventType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
use Carbon\CarbonInterval;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'club_id',
        'image',
        'name',
        'description',
        'start_date',
        'duration',
        'guests',
        'max_capacity',
        'event_type',
        'location',
    ];
    public function pictures()
    {
        return $this->hasMany(EventPicture::class);
    }

    protected $casts = [
        'start_date' => 'datetime',
        'event_type' => EventType::class,
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }

    protected function duration(): Attribute
    {
        return Attribute::make(
            get: fn($value) => CarbonInterval::minutes($value)->cascade()->forHumans(),
            set: fn($value) => is_numeric($value)
                ? $value
                : CarbonInterval::fromString($value)->totalMinutes
        );
    }

    protected function dayName(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => Carbon::parse($attributes['start_date'])->format('l')
        );
    }

    protected function formattedDate(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Carbon::parse($value)->format('l, F jS, Y'),
            set: fn($value) => Carbon::createFromFormat('l, F jS, Y', $value)->toDateString()
        );
    }
    protected function formattedDateOnly(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Carbon::parse($value)->format('F jS'),
            set: fn($value) => Carbon::createFromFormat('l, F jS, Y', $value)->toDateString()
        );
    }
    protected function formattedStartDate(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Carbon::parse($value)->format('F j, l') // August 24 Friday
        );
    }

    protected function formattedTimeRange(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) =>
            Carbon::parse($attributes['start_date'])->format('g:i A') . ' to ' .
                Carbon::parse($attributes['start_date'])->addMinutes($attributes['duration'])->format('g:i A')
        );
    }


    public function isEventEnded(): bool
    {
        return $this->start_date->isPast();
    }
}
