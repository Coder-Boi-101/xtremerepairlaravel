<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Twilio
 * 
 * @property int $id
 * @property string $phone
 * @property string $sid
 * @property string $token
 *
 * @package App\Models
 */
class Twilio extends Model
{
	protected $table = 'twilio';
	public $timestamps = false;

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'phone',
		'sid',
		'token'
	];
}
