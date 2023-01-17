<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellDevicesBrand
 * 
 * @property int $id
 * @property int|null $brand_id
 * @property int|null $device_id
 *
 * @package App\Models
 */
class SellDevicesBrand extends Model
{
	protected $table = 'sell_devices_brands';
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
