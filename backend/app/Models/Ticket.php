<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	use HasFactory;

	protected $fillable = [
		'ticket_type_id',
		'user_id',
		'qr_code',
		'status',
		'purchased_at',
		'check_in_at'
	];

	public function ticketType()
	{
		return $this->belongsTo(TicketType::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function payment()
	{
		return $this->hasOne(Payment::class);
	}
}
