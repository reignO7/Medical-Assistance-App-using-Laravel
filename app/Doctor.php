<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
	protected $guarded = [];
    public function appointment()
    {
    	return $this->hasMany(Appointment::class);
    }
    public $timestamps = false;
}
