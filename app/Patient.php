<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $guarded = [];
	public $timestamps = false;
    public function appointment()
    {
    	return $this->hasMany(Appointment::class);
    }
}

