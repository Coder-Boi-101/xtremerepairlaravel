<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RepairOption
 * 
 * @property int $id
 * @property string $optionName
 * @property string $image
 * @property int $device
 * @property int|null $status
 * @property int|null $adminStatus
 *
 * @package App\Models
 */
class RepairOption extends Model
{
	protected $table = 'repair_options';
	public $timestamps = false;

	protected $casts = [
		'device' => 'int',
		'status' => 'int',
		'adminStatus' => 'int'
	];

	protected $fillable = [
		'optionName',
		'image',
		'device',
		'status',
		'adminStatus'
	];
}
