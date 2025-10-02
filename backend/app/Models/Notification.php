<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
	use HasFactory;

	// Table name (optional if it's plural of model)
	protected $table = 'notifications';

	// Primary key (optional, default is 'id')
	protected $primaryKey = 'id';

	// No updated_at in migration → disable timestamps or set manually
	public $timestamps = false;

	// Mass assignable attributes
	protected $fillable = [
		'user_id',
		'title',
		'body',
		'type',
		'is_read',
		'created_at',
	];

	/**
	 * Relationship: Notification belongs to User
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}