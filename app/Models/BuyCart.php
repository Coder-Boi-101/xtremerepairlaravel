<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BuyCart
 * 
 * @property int $id
 * @property int|null $model_id
 * @property int|null $user_id
 * @property string|null $modelimage
 * @property int|null $variation_id
 * @property string|null $model_name
 * @property string|null $color_name
 * @property string|null $storage_name
 * @property string|null $carrier_name
 * @property string|null $condition_status
 * @property string|null $model_price
 * @property int|null $quantity
 * @property Carbon|null $date
 * @property string|null $status
 *
 * @package App\Models
 */
class BuyCart extends Model
{
	protected $table = 'buy_cart';
	public $timestamps = false;

	protected $casts = [
		'model_id' => 'int',
		'user_id' => 'int',
		'variation_id' => 'int',
		'quantity' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'model_id',
		'user_id',
		'modelimage',
		'variation_id',
		'model_name',
		'color_name',
		'storage_name',
		'carrier_name',
		'condition_status',
		'model_price',
		'quantity',
		'date',
		'status'
	];
}
