<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsEvents extends Model
{
    use HasFactory;

    protected $fillable = ['event_name', 'day', 'time', 'location', 'is_weekly', 'image'];
}
