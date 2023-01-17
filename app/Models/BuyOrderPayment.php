<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BuyOrderPayment
 * 
 * @property int $payment_id
 * @property int $master_order_id
 * @property string $transaction_id
 * @property string $gateway
 * @property string $total_price
 * @property string $payment_date
 *
 * @package App\Models
 */
class BuyOrderPayment extends Model
{
	protected $table = 'buy_order_payment';
	protected $primaryKey = 'payment_id';
	public $timestamps = false;

	protected $casts = [
		'master_order_id' => 'int'
	];

	protected $fillable = [
		'master_order_id',
		'transaction_id',
		'gateway',
		'total_price',
		'payment_date'
	];
}
