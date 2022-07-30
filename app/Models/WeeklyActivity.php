<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'service',
        'day',
        'time',
        'location_id'
    ];

    public function activity_location($location_id)
    {
//        dd($this->belongsTo(Location::class));
        return Location::where('id', $location_id)->get('location')[0]->location;
//        return $this->belongsTo(Location::class);
    }
}
