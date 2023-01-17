<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SellOrder
 * 
 * @property string|null $order_label
 * @property int $id
 * @property string|null $fname
 * @property string|null $lname
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $device
 * @property string|null $model_id
 * @property string|null $model_name
 * @property string|null $storage
 * @property string|null $carrier
 * @property string|null $sell_condition
 * @property Carbon|null $date
 * @property int|null $status
 * @property int|null $newOrder
 *
 * @package App\Models
 */
class SellOrder extends Model
{
	protected $table = 'sell_orders';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'newOrder' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'order_label',
		'fname',
		'lname',
		'email',
		'phone',
		'device',
		'model_id',
		'model_name',
		'storage',
		'carrier',
		'sell_condition',
		'date',
		'status',
		'newOrder'
	];
}
