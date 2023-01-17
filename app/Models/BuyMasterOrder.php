<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BuyMasterOrder
 * 
 * @property int $order_id
 * @property int $user_id
 * @property string $user_email
 * @property string $total_sales_tax
 * @property string $subtotal
 * @property string $total_price
 * @property string $shipping_charges
 * @property string $shipping_first_name
 * @property string $shipping_last_name
 * @property string $shipping_country
 * @property string $shipping_address
 * @property string $shipping_city
 * @property string $shipping_zipcode
 * @property string $shipping_phone
 * @property string $order_note
 * @property Carbon $order_date
 * @property int $status
 *
 * @package App\Models
 */
class BuyMasterOrder extends Model
{
	protected $table = 'buy_master_orders';
	protected $primaryKey = 'order_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'order_date'
	];

	protected $fillable = [
		'user_id',
		'user_email',
		'total_sales_tax',
		'subtotal',
		'total_price',
		'shipping_charges',
		'shipping_first_name',
		'shipping_last_name',
		'shipping_country',
		'shipping_address',
		'shipping_city',
		'shipping_zipcode',
		'shipping_phone',
		'order_note',
		'order_date',
		'status'
	];
}
