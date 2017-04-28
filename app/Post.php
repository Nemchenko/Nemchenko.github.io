<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public function tags()
	{
		return $this->belongsToMany(Tag::class)->withTimestamps();
	}
	
	public function category()
	{
		return $this->belongsTo(category::class);
	}
	public function comments()
	{
		return $this->hasMany(Message::class);
	}
}
