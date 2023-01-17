<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellDevice
 * 
 * @property int $device_id
 * @property string|null $device_name
 * @property string|null $device_image
 * @property string|null $status
 * @property int|null $position
 *
 * @package App\Models
 */
class SellDevice extends Model
{
	protected $table = 'sell_devices';
	protected $primaryKey = 'device_id';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int'
	];

	protected $fillable = [
		'device_name',
		'device_image',
		'status',
		'position'
	];
}
