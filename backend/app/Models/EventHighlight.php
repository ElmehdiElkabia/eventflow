<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventHighlight extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'highlight',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
