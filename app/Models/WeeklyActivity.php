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
}
