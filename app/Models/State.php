<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class State
 * 
 * @property int $id
 * @property string $value
 * @property string $name
 *
 * @package App\Models
 */
class State extends Model
{
	protected $table = 'states';
	public $timestamps = false;

	protected $fillable = [
		'value',
		'name'
	];
}
