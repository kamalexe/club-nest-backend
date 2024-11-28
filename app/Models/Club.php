<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image'];


    public function members()
    {
        return $this->hasMany(Member::class);
    }


    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
    public function clubMembers()
    {
        return $this->hasMany(Member::class)->where('incharge', 0);
    }
    public function inchargeMember()
    {
        return $this->hasMany(Member::class)->where('incharge', 1)->first();
    }
}
