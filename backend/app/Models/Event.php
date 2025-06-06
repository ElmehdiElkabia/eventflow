<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'time',
        'duration',
        'attendees',
        'max_attendees',
        'status',
        'location',
        'address',
        'price',
        'category',
        'rating',
        'reviews',
        'organizer_id',
    ];

    protected $casts = [
        'date' => 'date',
        'price' => 'decimal:2',
        'rating' => 'float',
    ];

    public function highlights()
    {
        return $this->hasMany(EventHighlight::class);
    }

    public function schedules()
    {
        return $this->hasMany(EventSchedule::class);
    }

    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }
}