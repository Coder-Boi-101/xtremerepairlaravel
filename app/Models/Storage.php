<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Storage
 * 
 * @property int $id
 * @property string|null $storage
 *
 * @package App\Models
 */
class Storage extends Model
{
	protected $table = 'storage';
	public $timestamps = false;

	protected $fillable = [
		'storage'
	];
}
