<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Carte extends Model {
	protected $fillable = ['nom', 'etat'];
}