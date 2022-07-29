<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'location'
    ];

    /**
     * Get the activity(ies) that have this location
     */
    public function location_activities()
    {
        return $this->belongsToMany(WeeklyActivity::class);
    }

}
