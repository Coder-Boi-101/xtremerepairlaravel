<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellPaypalPayment
 * 
 * @property int $id
 * @property int|null $sell_order_id
 * @property string|null $paypal_email
 *
 * @package App\Models
 */
class SellPaypalPayment extends Model
{
	protected $table = 'sell_paypal_payment';
	public $timestamps = false;

	protected $casts = [
		'sell_order_id' => 'int'
	];

	protected $fillable = [
		'sell_order_id',
		'paypal_email'
	];
}
