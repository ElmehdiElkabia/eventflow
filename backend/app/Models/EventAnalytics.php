<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAnalytics extends Model
{
	use HasFactory;

	protected $fillable = [
		'event_id',
		'total_visits',
		'tickets_sold',
		'tickets_checked_in',
		'revenue'
	];

	public function event()
	{
		return $this->belongsTo(Event::class);
	}
}
