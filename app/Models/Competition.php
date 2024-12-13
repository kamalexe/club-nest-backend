<?php

namespace App\Models;

use App\CompetitionType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'rules', 'scoring_system', 'prizes', 'competition_type'];
    protected $casts = [
        'competition_type' => CompetitionType::class,
    ];


    // Relationship: Each competition belongs to an event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
