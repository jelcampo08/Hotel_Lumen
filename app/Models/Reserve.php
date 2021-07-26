<?php

namespace App\Models;
use  Illuminate\Database\Eloquent\Model;

class Reserve extends Model {

	protected $fillable = [
		'g_name', 'g_address', 'g_number', 'g_email', 'r_preference', 'n_days', 'n_occu', 'e_bed', 'ci_date', 'p_night'
	];

	protected $hidden = [];
}