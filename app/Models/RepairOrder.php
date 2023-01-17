<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RepairOrder
 * 
 * @property int $id
 * @property int $model_id
 * @property int $store_id
 * @property string $price
 * @property string $payment_type
 * @property string $damage
 * @property string $customer_name
 * @property string $customer_email
 * @property string $customer_phone
 * @property Carbon $appoint_date
 * @property string $appoint_time
 *
 * @package App\Models
 */
class RepairOrder extends Model
{
	protected $table = 'repair_orders';
	public $timestamps = false;

	protected $casts = [
		'model_id' => 'int',
		'store_id' => 'int'
	];

	protected $dates = [
		'appoint_date'
	];

	protected $fillable = [
		'model_id',
		'store_id',
		'price',
		'payment_type',
		'damage',
		'customer_name',
		'customer_email',
		'customer_phone',
		'appoint_date',
		'appoint_time'
	];
}
