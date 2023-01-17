<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RepairDevicesBrand
 * 
 * @property int $id
 * @property int|null $brand_id
 * @property int|null $device_id
 *
 * @package App\Models
 */
class RepairDevicesBrand extends Model
{
	protected $table = 'repair_devices_brands';
	public $timestamps = false;

	protected $casts = [
		'brand_id' => 'int',
		'device_id' => 'int'
	];

	protected $fillable = [
		'brand_id',
		'device_id'
	];
}
