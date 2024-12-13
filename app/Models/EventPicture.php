<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPicture extends Model
{
    /** @use HasFactory<\Database\Factories\EventPictureFactory> */
    use HasFactory;

    protected $fillable = ['event_id', 'picture', 'caption'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    use HasFactory;
}
