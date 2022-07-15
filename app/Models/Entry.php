<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
	protected $table = 'entry';

	protected $fillable = [
		'user_id',
		'mood',
		'activity',
		'challenges',
		'photo'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
