<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BuyDevice
 * 
 * @property int $device_id
 * @property string|null $device_name
 * @property string|null $device_image
 * @property string|null $status
 * @property int|null $position
 *
 * @package App\Models
 */
class BuyDevice extends Model
{
	protected $table = 'buy_devices';
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
