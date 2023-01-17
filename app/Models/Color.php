<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Color
 * 
 * @property int $id
 * @property string|null $color
 * @property string $color_code
 * @property string|null $status
 *
 * @package App\Models
 */
class Color extends Model
{
	protected $table = 'colors';
	public $timestamps = false;

	protected $fillable = [
		'color',
		'color_code',
		'status'
	];
}
