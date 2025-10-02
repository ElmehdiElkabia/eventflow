<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	use HasFactory;

	protected $fillable = [
		'organizer_id',
		'title',
		'slug',
		'description',
		'category_id',
		'location_id',
		'start_datetime',
		'end_datetime',
		'capacity',
		'banner',
		'status'
	];

	
	public function organizer()
	{
		return $this->belongsTo(User::class, 'organizer_id');
	}

	public function ticketTypes()
	{
		return $this->hasMany(TicketType::class);
	}

	public function chatMessages()
	{
		return $this->hasMany(ChatMessage::class);
	}

	public function reviews()
	{
		return $this->hasMany(EventReview::class);
	}

	public function favorites()
	{
		return $this->hasMany(Favorite::class);
	}

	public function analytics()
	{
		return $this->hasOne(EventAnalytics::class);
	}
}
