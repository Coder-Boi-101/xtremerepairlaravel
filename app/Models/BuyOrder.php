<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BuyOrder
 * 
 * @property int $order_id
 * @property string|null $order_label
 * @property string|null $device
 * @property string|null $model_id
 * @property string|null $model_name
 * @property string|null $description
 * @property string|null $variation_id
 * @property string|null $fname
 * @property string|null $lname
 * @property string|null $email
 * @property string|null $phone
 * @property Carbon|null $date
 * @property int|null $status
 * @property int|null $newOrder
 *
 * @package App\Models
 */
class BuyOrder extends Model
{
	protected $table = 'buy_orders';
	protected $primaryKey = 'order_id';
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
		'device',
		'model_id',
		'model_name',
		'description',
		'variation_id',
		'fname',
		'lname',
		'email',
		'phone',
		'date',
		'status',
		'newOrder'
	];
}
