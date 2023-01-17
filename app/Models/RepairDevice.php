<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RepairDevice
 * 
 * @property int $device_id
 * @property string|null $device_name
 * @property string|null $device_image
 * @property string|null $status
 * @property int|null $position
 * @property int|null $service
 *
 * @package App\Models
 */
class RepairDevice extends Model
{
	protected $table = 'repair_devices';
	protected $primaryKey = 'device_id';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int',
		'service' => 'int'
	];

	protected $fillable = [
		'device_name',
		'device_image',
		'status',
		'position',
		'service'
	];
}
