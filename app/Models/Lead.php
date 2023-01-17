<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lead
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $message
 * @property string|null $medium
 * @property string|null $device
 * @property string|null $model
 * @property string|null $problem
 * @property Carbon|null $date
 *
 * @package App\Models
 */
class Lead extends Model
{
	protected $table = 'leads';
	public $timestamps = false;

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'name',
		'email',
		'phone',
		'message',
		'medium',
		'device',
		'model',
		'problem',
		'date'
	];
}
