<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrier
 * 
 * @property int $id
 * @property string|null $carrier
 *
 * @package App\Models
 */
class Carrier extends Model
{
	protected $table = 'carrier';
	public $timestamps = false;

	protected $fillable = [
		'carrier'
	];
}
