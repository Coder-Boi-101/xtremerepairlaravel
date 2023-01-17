<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AllBuyModel
 * 
 * @property int $id
 * @property string $model_name
 * @property int $brand
 * @property int $device
 * @property string $image
 * @property int $status
 *
 * @package App\Models
 */
class AllBuyModel extends Model
{
	protected $table = 'all_buy_models';
	public $timestamps = false;

	protected $casts = [
		'brand' => 'int',
		'device' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'model_name',
		'brand',
		'device',
		'image',
		'status'
	];
}
