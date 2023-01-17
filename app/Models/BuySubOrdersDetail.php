<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BuySubOrdersDetail
 * 
 * @property int $sub_order_id
 * @property int $master_order_id
 * @property string $sub_invoice
 * @property int|null $store_id
 * @property string $commission
 * @property string|null $model_name
 * @property string|null $order_invoice_no
 * @property string|null $model_color
 * @property string|null $model_storage
 * @property string|null $model_carrier
 * @property string|null $model_condition
 * @property string|null $model_price
 * @property string|null $order_role
 * @property string|null $order_status
 * @property Carbon $order_date
 * @property string|null $quantity
 * @property string|null $sub_sale_tax
 * @property string $total_price
 * @property string $net_price
 * @property string|null $invoice_label
 *
 * @package App\Models
 */
class BuySubOrdersDetail extends Model
{
	protected $table = 'buy_sub_orders_detail';
	protected $primaryKey = 'sub_order_id';
	public $timestamps = false;

	protected $casts = [
		'master_order_id' => 'int',
		'store_id' => 'int'
	];

	protected $dates = [
		'order_date'
	];

	protected $fillable = [
		'master_order_id',
		'sub_invoice',
		'store_id',
		'commission',
		'model_name',
		'order_invoice_no',
		'model_color',
		'model_storage',
		'model_carrier',
		'model_condition',
		'model_price',
		'order_role',
		'order_status',
		'order_date',
		'quantity',
		'sub_sale_tax',
		'total_price',
		'net_price',
		'invoice_label'
	];
}
