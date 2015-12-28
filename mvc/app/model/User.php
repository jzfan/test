<?php

namespace app\model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
	public $fillable = [ 'name' ];

	public $table = 'user';

	public $timestamps = false;

}