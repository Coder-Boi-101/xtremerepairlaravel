<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Saletax
 * 
 * @property int $id
 * @property int $tax
 *
 * @package App\Models
 */
class Saletax extends Model
{
	protected $table = 'saletax';
	public $timestamps = false;

	protected $casts = [
		'tax' => 'int'
	];

	protected $fillable = [
		'tax'
	];
}
