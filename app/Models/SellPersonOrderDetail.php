<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellPersonOrderDetail
 * 
 * @property int $order_id
 * @property string|null $model_name
 * @property string|null $order_invoice_no
 * @property string|null $model_color
 * @property string|null $model_storage
 * @property string|null $model_carrier
 * @property string|null $model_condition
 * @property string|null $model_price
 * @property int $cart_id
 * @property string|null $user_id
 * @property string|null $user_email
 * @property string|null $user_name
 * @property string|null $user_address1
 * @property string|null $user_address2
 * @property string|null $user_city
 * @property string|null $user_state
 * @property string|null $user_zipcode
 * @property string|null $user_phone
 * @property string|null $order_role
 * @property string|null $order_status
 * @property string|null $order_date
 * @property string $gateway
 * @property string $invoice_label
 *
 * @package App\Models
 */
class SellPersonOrderDetail extends Model
{
	protected $table = 'sell_person_order_detail';
	protected $primaryKey = 'order_id';
	public $timestamps = false;

	protected $casts = [
		'cart_id' => 'int'
	];

	protected $fillable = [
		'model_name',
		'order_invoice_no',
		'model_color',
		'model_storage',
		'model_carrier',
		'model_condition',
		'model_price',
		'cart_id',
		'user_id',
		'user_email',
		'user_name',
		'user_address1',
		'user_address2',
		'user_city',
		'user_state',
		'user_zipcode',
		'user_phone',
		'order_role',
		'order_status',
		'order_date',
		'gateway',
		'invoice_label'
	];
}
