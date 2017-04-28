<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
     public function getTitleAttribute($value)
	{
		return ucfirst($value);
	}
	
	public function setTitleAttribute($value)
	{
		return $this->attributes['title'] = ucfirst($value);
	}
	
	public function post(){
		return $this->hasMany(post::class);
	}
}
