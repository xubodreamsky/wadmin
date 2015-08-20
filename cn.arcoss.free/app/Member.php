<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Member
 * @package App
 */

class Member extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'member';

	/**
	 * @var string
	 */
	protected $dateFormat = 'U';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'mobile', 'gender', 'account',
		'state', 'age', 'nick'];

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}