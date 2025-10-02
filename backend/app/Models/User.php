<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
	use HasFactory, Notifiable;

	protected $fillable = [
		'name',
		'email',
		'password',
		'phone',
		'avatar',
		'is_verified'
	];

	protected $hidden = ['password', 'remember_token'];



	public function roles()
	{
		return $this->belongsToMany(Role::class, 'user_roles');
	}

	public function organizedEvents()
	{
		return $this->hasMany(Event::class, 'organizer_id');
	}

	public function tickets()
	{
		return $this->hasMany(Ticket::class);
	}

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}

	public function notifications()
	{
		return $this->hasMany(Notification::class);
	}

	public function reviews()
	{
		return $this->hasMany(EventReview::class);
	}

	public function auditLogs()
	{
		return $this->hasMany(AuditLog::class);
	}
}
