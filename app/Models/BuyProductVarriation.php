<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BuyProductVarriation
 * 
 * @property int $id
 * @property int|null $model_id
 * @property string $model_name
 * @property int|null $buy_color_id
 * @property int|null $buy_storage_id
 * @property int|null $buy_carrier_id
 * @property int|null $buy_condition_id
 * @property int|null $status
 * @property int $brand
 * @property int $device
 * @property Carbon $variation_date
 *
 * @package App\Models
 */
class BuyProductVarriation extends Model
{
	protected $table = 'buy_product_varriations';
	public $timestamps = false;

	protected $casts = [
		'model_id' => 'int',
		'buy_color_id' => 'int',
		'buy_storage_id' => 'int',
		'buy_carrier_id' => 'int',
		'buy_condition_id' => 'int',
		'status' => 'int',
		'brand' => 'int',
		'device' => 'int'
	];

	protected $dates = [
		'variation_date'
	];

	protected $fillable = [
		'model_id',
		'model_name',
		'buy_color_id',
		'buy_storage_id',
		'buy_carrier_id',
		'buy_condition_id',
		'status',
		'brand',
		'device',
		'variation_date'
	];
}
